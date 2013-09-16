#!/usr/bin/env python

from Queue import Queue
import subprocess, threading, time
import os, os.path
import MySQLdb
import shutil
import cStringIO
import fileinput

ms_dbname = ""
ms_dbhost = ""
ms_dbuser = ""
ms_password = ""

noOfEasy, noOfMed, noOfHard = 0, 0, 0
ptsEasy, ptsMed, ptsHard = 0, 0, 0
noOfInThreads, noOfOutThreads = 0, 0
usrpath = '/usr/local/codecracker'

def readConfigFile():
	"""Reads config file and sets values for MySql vars & no. of probs and their respective points"""
	print 'Reading config file..',
    
	global ms_dbname, ms_dbhost, ms_dbuser, ms_password
	global noOfEasy, noOfMed, noOfHard
	global ptsEasy, ptsMed, ptsHard
	global noOfInThreads, noOfOutThreads
	f = file('%s/codecracker.conf' % usrpath, 'r')
	lines = f.readlines()
	f.close()
	for line in lines:
		line = line.strip()
		if line == '' or line.startswith('#'):
			continue
		tokens = line.split('=')
		if tokens[0] == 'number of easy questions':			
			noOfEasy = int(tokens[1])
		elif tokens[0] == 'number of medium questions':
			noOfMed = int(tokens[1])
		elif tokens[0] == 'number of hard questions':
			noOfHard = int(tokens[1])
		elif tokens[0] == 'points per easy question':
			ptsEasy = int(tokens[1])
		elif tokens[0] == 'points per medium question':
			ptsMed = int(tokens[1])
		elif tokens[0] == 'points per hard question':
			ptsHard = int(tokens[1])
		elif tokens[0] == 'mysql server':
			ms_dbhost = tokens[1]
		elif tokens[0] == 'mysql user':
			ms_dbuser = tokens[1]
		elif tokens[0] == 'mysql password':
			ms_password = tokens[1]
		elif tokens[0] == 'mysql database':
			ms_dbname = tokens[1]
		elif tokens[0] == 'number of input threads':
			noOfInThreads = int(tokens[1])
		elif tokens[0] == 'number of output threads':
			noOfOutThreads = int(tokens[1])
		else:
			 raise Exception
	print 'Read'

iq = Queue()
oq = Queue()

class Job:
	"""Represents a tuple from table queue"""
	def __init__(self, row):
		if row != None:
			self.tname, self.code, self.cid, self.time, self.prob_no ,self.language= row
	def show(self):
		print 'cid =', self.cid
		print 'tname = ', self.tname

class Score:
	"""Represents a tuple from table score"""
	def __init__(self, row):
		if row != None:
			self.tname, self.score, self.solved, self.sub, self.timestamp, self.rank = row
	def show(self):
		print 'tname=', self.tname
		print 'solved=', self.solved

def dbQuery(query, table):
	"""Do query on database and return result"""
	#print 'Doing dbQuery: %s' % query
	conn = MySQLdb.connect(host = ms_dbhost,
                           user = ms_dbuser,
                           passwd = ms_password,
                           db = ms_dbname)
	cursor = conn.cursor ()
	cursor.execute (query)
	row = cursor.fetchone ()
	cursor.close ()
	conn.close()
	if row == None:
		return None
	res = None
	if table == 'queue':
		res = Job(row)
	elif table == 'score':
		res = Score(row)
	else:
		raise Exception
	#print 'Query done!'
	return res

def writeDB(query):
	"""Do query on database"""
	#print 'Writing query: %s..' % query
	conn = MySQLdb.connect(host = ms_dbhost,
                           user = ms_dbuser,
                           passwd = ms_password,
                           db = ms_dbname)
	cursor = conn.cursor ()
	cursor.execute (query)
	cursor.close ()
	conn.close()
	#print 'Query written'

def check(ja, ua):
	"""Compare judge answer and user answer"""
	print 'Checking judge ans & user ans..',
	while ja.count(''): ja.remove('')
	while ua.count(''): ua.remove('')
	#print 'ja=',ja
	#print 'ua=',ua
	if len(ja) != len(ua):
		return False
	ret = True
	try:
		for i in range(len(ja)):
			line1, line2 = ja[i], ua[i]
			tokens1, tokens2 = line1.split(), line2.split()	    
			for j in range(len(tokens1)):
				print 'here'
				print tokens1[j]
				print tokens2[j]
				if tokens1[j] != tokens2[j]:
					ret = False
					break
			if not ret:
				break
	except Exception, e:
		print "Exception in check:", e
		ret = False
		pass
	print 'Checked. Res = ', ret
	return ret

def updateScore(tname, addPts, solved):
	"""Updates score for team = 'tname' and revises the ranks"""
	#print 'Updating score. Solved for %s: %s' % (tname, solved)
	conn = MySQLdb.connect(host = ms_dbhost,
                           user = ms_dbuser,
                           passwd = ms_password,
                           db = ms_dbname)
	cursor = conn.cursor ()
	query = "UPDATE score SET score = score+%d WHERE tname = '%s'" % (addPts, tname)
	cursor.execute(query)
	query = "UPDATE score SET solved = '%s' WHERE tname = '%s'" % (solved, tname)
	cursor.execute(query)
	if addPts > 0:
		print addPts
		query = "UPDATE score SET timestmp = CURRENT_TIMESTAMP WHERE tname = '%s'" % (tname)
	cursor.execute(query)
	query = "CREATE OR REPLACE VIEW user_scores AS SELECT * FROM score ORDER BY (score-sub) DESC, timestmp ASC"
	cursor.execute(query)
	query = "SELECT tname FROM user_scores"
	cursor.execute(query)
	tnames = cursor.fetchall()
	# Hi-fi way to update Rank of each team
	#for team in tnames:
	#query = """SELECT (
	#	   SELECT COUNT(*)+1 
	#		   FROM user_scores 
	#		   WHERE ((score-sub) >@USER_SCORE := (SELECT (score-sub) FROM score WHERE tname='%s')) 
	#		   OR (((score-sub) =@USER_SCORE := (SELECT (score-sub) FROM score WHERE tname='%s')) 
	#		   AND (timestmp <@TimeStamp := (SELECT timestmp FROM score WHERE tname='%s')) 
	#		   )) 
	#		AS rank""" % (team[0], team[0], team[0])
	#	cursor.execute(query)
	#	rank = cursor.fetchone()[0]
	#	query = "UPDATE score SET rank = %d WHERE tname = '%s'" % (rank, team[0])
	#	cursor.execute(query)

    # Simple way to update Rank of each team
	for i in xrange(len(tnames)):
		query = "UPDATE score SET rank = %d WHERE tname = '%s'" % (i+1, tnames[i][0]) 
		cursor.execute (query) 
	cursor.close()
	conn.close()
	print 'Score successfully updated'

def Processor(threadNum):
	"""Target function for InThreads"""
	print 'Processor invoked with thread-%d' % threadNum
	while True:

		# Get a new job from iq
		print 'Thread %d, waiting for a job.' % threadNum
		j = iq.get()
		print "In Processor class, job := "
		j.show()

		# Read tname's data from score
		query = "SELECT * FROM score WHERE tname = '%s'" % j.tname
		record = dbQuery(query, 'score')
		solved = record.solved
		add = 0
		runTime = 0

		# Should have checked if data == null, but skipping it
		# Check if prob_id is already solved
		prob = "%d/" % j.prob_no
		res = "Not Known"
	
		if solved.find(prob) >= 0:
			# Prob already solved. Update status and get next job.
			res = "Problem already solved"
		else:
			# Set addPts according as prob_no
			addPts = 0
            
			if j.prob_no <= noOfEasy:
				addPts = ptsEasy
			elif j.prob_no <= noOfEasy + noOfMed:
				addPts = ptsMed
			elif j.prob_no <= noOfEasy + noOfMed + noOfHard:
				addPts = ptsHard
			else:
				raise Exception

			# Write code to a temp file.
			if j.language == 'c':
			    fname = "temp%d.cc" % threadNum
			elif j.language == 'python':
			    fname = "temp%d.py" % threadNum
			elif j.language == 'java':
			    fname = "temp%d.java" % threadNum
			tempfile_path = os.path.join(usrpath, fname)
			f = file(tempfile_path, "w")
			f.write(j.code)
			f.close()
			print 'Code file written'

			# Save user code to filesystem.
			try:
			    if j.language == 'c':
				    nameOfFile = '%d.cc' % (j.cid)
			    elif j.language == 'python':    
				    nameOfFile = '%d.py'%(j.cid)
			    elif j.language == 'java' :
				    nameOfFile = '%d.java'%(j.cid)    
				    
			    print nameOfFile
			    dir_path = os.path.join(usrpath, 'user_codes')
			    dir_path = os.path.join(dir_path, j.tname)
			    if not os.path.exists(dir_path):
					os.mkdir(dir_path)
			    file_path = os.path.join(dir_path, nameOfFile)
			    shutil.copy(tempfile_path, file_path)
			except IOError, e:
				print 'Exception Raised:', e
				pass
            		
			if j.language == 'java':
				replace_text = 'temp%d' %(threadNum)
				print 'here'
				print file_path 
				for line in fileinput.FileInput(tempfile_path,inplace=1):
					line = line.replace("Codecracker",replace_text)
					print line

			# Remove previous object file.
			try:
				os.unlink("temp%d" % threadNum)
			except OSError, e:
				pass
	    
			# Spawn a subprocess for compiling the code.
			if j.language == 'c':
				cmd = "g++ -lm -o %s/temp%d %s/temp%d.cc >& %s/compiler.txt" % (usrpath, threadNum, usrpath, threadNum, usrpath)
			#elif j.language == 'python':    
			#	cmd = "python %s/temp%d.py 2> %s/compiler.txt" % (usrpath,threadNum,usrpath)			
			elif j.language == 'java':
				cmd = "javac %s/temp%d.java > %s/compiler.txt" % (usrpath,threadNum,usrpath)    
			
			ret = 0
			if j.language != 'python': 
				ret = subprocess.call(cmd, shell=True)
				print 'compiled'

			if ret != 0 and j.language != 'python':
				# Compilation unsuccessful.
				res = "Compilation Error"
			else:
				# Create a String Buffer for feeding input to user code.
				#inputCases = cStringIO.StringIO(inputs[j.prob_no-1])
				fname = '%s/judge_input/in%d.txt' % (usrpath, j.prob_no )
				fd = file(fname, 'r')

				# Run Output File for testing user code.
				if j.language == 'c':
					cmd = '%s/temp%d' % (usrpath, threadNum)
				elif j.language == 'python':     
					cmd = 'python %s/temp%d.py' % (usrpath, threadNum)
				elif j.language == 'java':
					cmd = 'cd %s; java temp%d'%(usrpath , threadNum)

				p = subprocess.Popen(cmd, shell=True, stdin=fd, stdout=subprocess.PIPE)
				#p = subprocess.Popen(cmd, shell=True, stdin=inputCases, stdout=subprocess.PIPE)
                
				startTime = time.time()
				res = "Wrong Answer"
				while True:
					p.poll()
					#print 'p.returncode =',p.returncode
					runTime = time.time() - startTime
					# Break if subprocess has terminated or runtime has exceeded 4.0s
					if ((p.returncode != None) or (runTime > 4.00001)):
						break;
                
				if p.returncode == None:
					try:
						res = "Time Limit Exceeded"
						p.kill()
					except OSError, e:
						print 'error in p.kill',e
						pass
				else:
					if p.returncode == 0:
						usrAns = p.stdout.read().splitlines()
						if check(judgeAns[j.prob_no-1], usrAns):
							res = "Correct Answer"
							solved = '%s%d/' % (solved, j.prob_no)
							add = addPts
					else:
						# Return code of subprocess is non-zero
						res = "Abnormal Termination"
		print res
		query = "INSERT INTO compiler (cid, time, tname, problemid, result, runningtime) VALUES(%d, '%s', '%s', '%s', '%s', '%.4f')" %(j.cid, j.time, j.tname, j.prob_no, res, runTime)
		writeDB(query)
		updateScore(j.tname, add, solved)

		query = "INSERT INTO status VALUES(%d, '%s')" % (j.cid, res)
		writeDB(query)
        
		iq.task_done()
		# End of if (checked whether prob_no was already solved)
	#End of while
# End of Processor

readConfigFile()
inputs = []
for i in xrange(noOfEasy + noOfMed + noOfHard):
	fname = '%s/judge_input/in%d.txt' % (usrpath, i+1)
	f = file(fname, 'r')
	inputs.append(f.read())

judgeAns = []
for i in xrange(noOfEasy + noOfMed + noOfHard):
	fname = '%s/judge_ans/ans%d.txt' % (usrpath, i+1)
	f = file(fname, 'r')
	judgeAns.append(f.read().splitlines())

for i in xrange(noOfInThreads):
	t = threading.Thread(target=Processor, args=(i,))
	t.setDaemon(True)
	t.start()

while True:
	"""Infinite loop (main) checks DB for new entries and enqueus the valid ones"""
    
	query = 'SELECT * FROM queue ORDER BY cid LIMIT 1'
	j = dbQuery(query, "queue")
    
	# Check if a job came from the query
	if j != None:    
		j.prob_no = (int)(j.prob_no)
		query = "DELETE FROM queue WHERE cid=%s" % j.cid
		writeDB(query)
    	
		# Check if the entry is valid. (Prob_id is valid)
		if (j.prob_no >= 1 and j.prob_no <= noOfEasy + noOfMed + noOfHard):
			print 'New JOB Enqueued'
			iq.put(j)
	time.sleep(2)
