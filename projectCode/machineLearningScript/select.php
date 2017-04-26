<!DOCTYPE html>
<html>
    <head>
    <title>Machine Learn to March Madness Glory</title>
    </head>
    <body>
    <form id="form1" name="form1" method="post" action="execute.php">
      <table width="300" border="1">
        <tr>
          <td><label>Multiple Selection for Factors to be Considered in March Madness Prediction</label>&nbsp;</td>
          <td><select name="model" size="5" tabindex="1" required>
            <option value="1">Linear Logistic Regression</option>
            <option value="2">SVM RBF</option>
            <option value="3">SVM Linear</option>
            <option value="4">SVM Poly</option>
            <option value="5">SVM sigmoid</option>
          </select>
          <td><select name="select[]" size="10" multiple="multiple" tabindex="1">
            <option value="score">score</option>
            <option value="fga">fga</option>
            <option value="fga3">fgp</option>
            <option value="3pp">3pp</option>
            <option value="ftp">ftp</option>
            <option value="dr">or</option>
            <option value="ast">ast</option>
            <option value="to">to</option>
            <option value="stl">stl</option>
            <option value="blk">blk</option>
          </select>
          </td>
        </tr>
        <tr>
          <td><input type="submit" name="Submit" value="Submit" tabindex="2" /></td>
        </tr>
      </table>
    </form>
	
<br>
Note: It takes about 3 minutes in average to generate the new prediction picture in a free Amazon Server. It takes longer for SVM to build its model. Please wait patiently in after submitting your choice.
<br>
<br>
<br>
<br>
This is the prediction picture last user generated:
<br>
    <img src="predicted_bracket.jpg" alt="prediction">
    </body>
    </html>


