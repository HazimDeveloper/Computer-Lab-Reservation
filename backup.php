<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<div class="container">
  <div class="title-form">
    <h1>Permohonan Makmal Komputer</h1>
  </div>
  <form class="main"  method="post" action="">
    <div class="field-form">
      <input type="text" name="email" placeholder="Emel Rasmi" autofocus>
    </div>
    <div class="field-form">
      <input type="text" name="nama" placeholder="Nama Penuh">
    </div>
    <div class="field-form">
      <input type="text" name="phoneNum" class="last-name" placeholder="Nombor Telefon">
    </div>
    <div class="field-form gender-field">
      <div class="male-container">
        <span>Male</span><input type="radio" name="gender" class="male" value="male">
      </div>
      <div class="female-container">
        <span>Female</span><input type="radio" name="gender" class="female" value="female">
      </div>      
    </div>
    <div class="field-form birthday-field">
      <span>Birthday</span>
        <select name="month" id="month-selection">
          <option value="">Month</option>
          <option value="01">Jan</option>
          <option value="02">Feb</option>
          <option value="03">Mar</option>
          <option value="04">Apr</option>
          <option value="05">May</option>
          <option value="06">Jun</option>
          <option value="07">Jul</option>
          <option value="08">Aug</option>
          <option value="09">Sep</option>
          <option value="10">Oct</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select>
        <select name="day" id="day-selection">
          <option value="">Day</option>
        </select>
        <select name="year" id="year-selection">
          <option value="">Year</option>
        </select>  
    </div>
    <div class="field-form address">
      <textarea name="address" id="address" placeholder="Address"></textarea>
      </div>
    <div class="field-form dep">
      <input type="text" name="department" class="department" placeholder="Department">
    </div>
    <div class="field-form">
      <input type="text" name="course" class="course" placeholder="Course">
    </div> 
    <div class="field-form year-section">
        <select name="year" id="schoolyear">
          <option value="">School year</option>
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5ft</option>
        </select>
        <select name="section" id="section">
          <option value="">Section</option>
          <option value="a">A</option>
          <option value="b">B</option>
          <option value="c">C</option>
          <option value="d">D</option>
          <option value="e">E</option>
          <option value="f">F</option>
          <option value="g">G</option>
          <option value="h">H</option>
      </select>   
    </div>
    <div class="field-form button">
      <input type="submit" name="submit" class="add" value="Add">
    </div>
  </form>
</div>