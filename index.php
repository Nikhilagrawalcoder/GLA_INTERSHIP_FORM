<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLA UNIVERSITY Institutional Internship </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="heading">GLA UNIVERSITY Institutional Internship Form</h1>
    <p class="details"><em>Enter Your details for any Document needed for internship at IIT,NIT or others </em></p>
    <?php
session_start();

// Check if status parameter is set in the URL
if(isset($_GET['status'])) {
    $status = $_GET['status'];
    if($status == "Data Inserted Successfully") {
        echo '<p class="sub"><em>Thanks for submitting the form. Your form is successfully submitted.</em></p>';
    } else {
        echo '<script>alert("Error: Data Not Inserted");</script>';
    }
}
?>


   
    <div class="form-container">
        <form action="code.php" method="post" class="form">
          
            <div class="form-group">
                <label for="rollNo" class="label">Roll No:</label>
                <input type="text" id="rollNo" name="rollNo" class="input" required placeholder="Enter Your Roll No">
            </div>
            <div class="form-group">
                <label for="name" class="label">Name:</label>
                <input type="text" id="name" name="name" class="input" required placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="year" class="label">Year:</label>
                <input type="text" id="year" name="year" class="input" required placeholder="Enter Your Current Year ">
            </div>
            <div class="form-group">
                <label for="section" class="label">Section:</label>
                <input type="text" id="section" name="section" class="input" required placeholder="Enter Your Section ">
            </div>
            <div class="form-group">
                <label for="cpi" class="label">CPI:</label>
                <input type="text" id="cpi" name="cpi" class="input" required placeholder="Enter Your CPI">
            </div>
            <div class="form-group">
                <label for="institution" class="label">Institution:</label>
                <input type="text" id="institution" name="institution" class="input" required placeholder="Enter Your Institution name applied">
            </div>
            <div class="form-group">
                <label for="mobileno" class="label">Mobile No:</label>
                <input type="text" id="mobileno" name="mobileno" class="input" required placeholder="Enter Your Mobile No">
            </div>
            <div class="form-group">
                <label for="email" class="label">Email:</label>
                <input type="text" id="email" name="email" class="input" required placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label class="label">Documents Needed:</label>
                <div class="checkbox-group">
                    <label for="transcript" class="checkbox-label">
                        <input type="checkbox" id="transcript" name="documents[]" value="Transcript" class="checkbox">
                        Transcript
                    </label>
                    <label for="bonafide" class="checkbox-label">
                        <input type="checkbox" id="bonafide" name="documents[]" value="Bonafide Certificate" class="checkbox">
                        Bonafide Certificate
                    </label>
                    <label for="top10" class="checkbox-label">
                        <input type="checkbox" id="top10" name="documents[]" value="Top 10 Certificate" class="checkbox">
                        Top 10 Certificate
                    </label>
                    <label for="top20" class="checkbox-label">
                        <input type="checkbox" id="top20" name="documents[]" value="Top 20% Certificate" class="checkbox">
                        Top 20% Certificate
                    </label>
                    <label for="recommendation" class="checkbox-label">
                        <input type="checkbox" id="recommendation" name="documents[]" value="Letter of Recommendation" class="checkbox">
                        Letter of Recommendation
                    </label>
                    <label for="others" class="checkbox-label">
                        <input type="checkbox" id="others" name="documents[]" value="Others" onchange="toggleOtherInput(this.checked)" class="checkbox">
                        Others
                    </label>
                    <input type="text" id="otherInput" name="otherInput" class="input other-input" placeholder="Please specify">
                </div>
            </div>
            <div class="form-group">
                <label for="howKnow" class="label">How did you know about this survey?</label>
                <input type="text" id="howKnow" name="howKnow" class="input" required>
            </div>
            <div class="button-group">
                <button type="submit" class="button" name="insert_data">Submit</button>
            </div>
        </form>
    </div>
    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS24cY9TwlbG2Ed5KNFREUfpBYG2nEeANZsv07z08kO8Q&s" alt="" id="de" >
    <script src="app.js"></script>
</body>
</html>
