<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback Form</title>
<link rel="stylesheet" href="css/styles.css">
<script>
window.addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); }
</script>
<style>
  body {
    color: black;
  }
  .main-heading {
    text-align: center;
  }
</style>
</head>
<body>
<form action="php/admin.php" method="POST">
  <div class="admin-login">
    <input type="submit" name="admin" value="Admin" id="admin-btn">
  </div>
</form>

<h1 class="main-heading">STUDENTS REVIEW DASHBOARD</h1>

<div class="container">
  <h3><u>Help us improve by providing your feedback.</u></h3>

  <form action="php/feedback.php" method="post" class="student-form">
    <div class="student-details">
      <label for="year">Academic Year</label>
      <select name="year" id="year">
        <option value="2024">2024</option>
        <option value="2023">2023</option>
        <option value="2022">2022</option>
        <option value="2021">2021</option>
      </select><br>

      <label for="sem">Semester</label>
      <select name="sem" id="sem">
        <option value="1st">Sem 1</option>
        <option value="2nd">Sem 2</option>
        <option value="3rd">Sem 3</option>
        <option value="4th">Sem 4</option>
        <option value="5th">Sem 5</option>
        <option value="6th">Sem 6</option>
        <option value="7th">Sem 7</option>
        <option value="8th">Sem 8</option>
      </select><br>

      <label for="date">Date of Feedback</label>
      <input type="date" id="date" name="date"><br>

      <label for="branch">Branch</label>
      <select name="branch" id="branch">
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="MECH">MECH</option>
        <option value="CIVIL">CIVIL</option>
      </select><br>

      <label for="section">Section</label>
      <select name="section" id="section">
        <option value="A">Sec A</option>
        <option value="B">Sec B</option>
        <option value="C">Sec C</option>
        <option value="D">Sec D</option>
      </select><br>

      <label for="subject">Subject</label>
      <select name="subject" id="subject">
        <option value="PHY">physics</option>
        <option value="DSA">DSA</option>
        <option value="MAT">MATHS</option>
        <option value="WA">WEB APPLICATIONS</option>
        <option value="SCI">SCIENCE</option>
      </select><br>
    </div>

    <div class="student-feedback">
      <h4>1) Did the teacher cover the entire syllabus?</h4>
      <label>
        <input type="radio" id="ques1-5" name="ques1" value="5" />
        5- Excellent
      </label>
      <label>
        <input type="radio" id="ques1-4" name="ques1" value="4" />
        4- Very Good
      </label>
      <label>
        <input type="radio" id="ques1-3" name="ques1" value="3" />
        3- Good
      </label>
      <label>
        <input type="radio" id="ques1-2" name="ques1" value="2" />
        2- Average
      </label>
      <label>
        <input type="radio" id="ques1-1" name="ques1" value="1" />
        1- Below Average
      </label>
      <label>
        <input type="radio" id="ques1-0" name="ques1" value="0" />
        Tick if not applicable
      </label>
      <br />

      <h4>2) Rate the teacher's effectiveness:</h4>
      <label>
        <input type="radio" id="ques2-5" name="ques2" value="5" />
        5- Excellent
      </label>
      <label>
        <input type="radio" id="ques2-4" name="ques2" value="4" />
        4- Very Good
      </label>
      <label>
        <input type="radio" id="ques2-3" name="ques2" value="3" />
        3- Good
      </label>
      <label>
        <input type="radio" id="ques2-2" name="ques2" value="2" />
        2- Average
      </label>
      <label>
        <input type="radio" id="ques2-1" name="ques2" value="1" />
        1- Below Average
      </label>
      <label>
        <input type="radio" id="ques2-0" name="ques2" value="0" />
        Tick if not applicable
      </label>
      <br />

      <h4>3) Rate the contents of the curriculum:</h4>
      <label>
        <input type="radio" id="ques3-5" name="ques3" value="5" />
        5- Excellent
      </label>
      <label>
        <input type="radio" id="ques3-4" name="ques3" value="4" />
        4- Very Good
      </label>
      <label>
        <input type="radio" id="ques3-3" name="ques3" value="3" />
        3- Good
      </label>
      <label>
        <input type="radio" id="ques3-2" name="ques3" value="2" />
        2- Average
      </label>
      <label>
        <input type="radio" id="ques3-1" name="ques3" value="1" />
        1- Below Average
      </label>
      <label>
        <input type="radio" id="ques3-0" name="ques3" value="0" />
        Tick if not applicable
      </label>
      <br />

      <h4>4) Rate any applicable lab experiments:</h4>
      <label>
        <input type="radio" id="ques4-5" name="ques4" value="5" />
        5- Excellent
      </label>
      <label>
        <input type="radio" id="ques4-4" name="ques4" value="4" />
        4- Very Good
      </label>
      <label>
        <input type="radio" id="ques4-3" name="ques4" value="3" />
        3- Good
      </label>
      <label>
        <input type="radio" id="ques4-2" name="ques4" value="2" />
        2- Average
      </label>
      <label>
        <input type="radio" id="ques4-1" name="ques4" value="1" />
        1- Below Average
      </label>
      <label>
        <input type="radio" id="ques4-0" name="ques4" value="0" />
        Tick if not applicable
      </label>
      <br />

      <h4>5) Any additional remarks:</h4>
      <textarea name="remarks" rows="6" column="6"></textarea><br>
    </div>

    <div class="submit-form">
      <input type="submit" name="submit" value="Submit Feedback">
    </div>
  </form>
  <br>
</div>
</body>
</html>
