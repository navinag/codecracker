<?php
include "authenticate.php";
include "retrieve.php";
$t=time();
include "header.php";

if($tname != 'admin') {
	header("Location:home.php?t=$t");
}

?>
<script type="text/javascript">
document.title=document.title + " Administrator";
</script>
<script type="text/javascript" src="js/adminfuncs.js"></script>

 <br>
 <!-- <form name="form1">   -->
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th scope="col"><div align="center">
        <span class="style3">--ADMINISTRATIVE OPTIONS--</span>
        </div></th>
    </tr>
    <tr>
      <td><div>
        <br>
        <table width="800" border="1">
          <tr>
            <td width="200" rowspan="2"><div align="center" class="style4">Team Search</div></td>
            <td width="743">
            Team Name(Wildcards allowed):&nbsp;<INPUT type="text" name="tname" id="tkey">&nbsp;&nbsp;
            <input type="button" value="Search" onClick="tsearch()">
            </td>
          </tr>
          <tr>
            <td>
            <span id="tdetails"></span>
            </td>
          </tr>
        </table>
        <br />

        <table width="800" border="1">
          <tr>
            <td width="200" rowspan="4"><div align="center" class="style4">User Search</div></td>
            <td width="742">
            User name(Wildcards allowed):&nbsp;
            <input type="text" name="uname" id="ukey">&nbsp;&nbsp;
            <input type="button" value="Search" onClick="usearch()">
            </td>
          </tr>
          <tr>
            <td>
            <span id="udetails"></span>
            </td>
          </tr>
        </table>
        <br />

        <table width="800" border="1">
          <tr>
            <td width="200" rowspan="3"><div align="center" class="style4">Delete Team</div></td>
            <td width="744">
            Team Name(Wildcards allowed):&nbsp;<INPUT type="text" name="tname1" id="team">&nbsp;&nbsp;
            <input type="button" value="Delete" onClick="tdelconfirm()">
            </td>
          </tr>
          <tr>
            <td>
            <span id="tdelList"></span>
            </td>
          </tr>
        </table>
        <br />
        
        <table width="800" border="1">
          <tr>
            <td width="200" rowspan="3"><div align="center" class="style4">Delete User</div></td>
            <td width="744">
            User Name(Wildcards allowed):&nbsp;<INPUT type="text" name="uname1" id="username">&nbsp;&nbsp;
            <input type="button" value="Delete" onClick="udelconfirm()">
            </td>
          </tr>
          <tr>
            <td>
            <span id="udelList"></span>
            </td>
          </tr>
        </table>
        <br />

        <table width="800" border="1">
          <tr>
            <td width="200" rowspan="3"><div align="center" class="style4">Update Team Score</div></td>
            <td width="744">
            Team Name:&nbsp;<INPUT type="text" name="tname2" id="teamname">
            &nbsp;&nbsp;
            Score Change:&nbsp;<input type="text" name="scrchng" id="score">
            <br />
            <input type="radio" value="decrease" name="opern" id="opertn" CHECKED />
            Decrease
            &nbsp;&nbsp;
            <input type="radio" value="increase" name="opern" id="opertn" />
            Increase
            &nbsp;&nbsp;
            <input type="button" value="Update" onClick="updtscr()">
            </td>
          </tr>
          <tr>
            <td>
            <span id="scoredetails"></span>
            </td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </div></td>
    </tr>
  </table>
  <!-- </form> -->
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>
