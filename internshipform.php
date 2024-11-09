<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        h3 {
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 5px;
            color: #4CAF50;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        textarea {
            resize: vertical;
        }
        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Internship Application Form</h2>

        <form action="/submit_application" method="post">
            <div class="section">
                <h3>Position Applied For</h3>
                <input type="text" name="position" required>
            </div>

            <div class="section">
                <h3>Personal Information</h3>
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>

                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>

                <label for="zip">Zip Code:</label>
                <input type="text" id="zip" name="zip" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="section">
                <h3>Employment Eligibility</h3>
                <label>Are you legally eligible to work in this country?</label>
                <input type="radio" name="eligibility" value="yes" required> Yes
                <input type="radio" name="eligibility" value="no" required> No

                <label>Will you now or in the future require sponsorship for employment visa status?</label>
                <input type="radio" name="sponsorship" value="yes" required> Yes
                <input type="radio" name="sponsorship" value="no" required> No
            </div>

            <div class="section">
                <h3>Education</h3>
                <label for="education">Highest Level of Education:</label>
                <input type="text" id="education" name="education" required>

                <label for="school">School/University Name:</label>
                <input type="text" id="school" name="school" required>

                <label for="degree">Degree or Diploma Received:</label>
                <input type="text" id="degree" name="degree">

                <label for="grad_year">Graduation Year:</label>
                <input type="text" id="grad_year" name="grad_year">
            </div>

            <div class="section">
                <h3>Employment History</h3>
                <label>Company Name:</label>
                <input type="text" name="company1" required>
                
                <label>Position:</label>
                <input type="text" name="position1" required>

                <label>Dates Employed:</label>
                <input type="text" name="dates1" required>

                <label>Responsibilities:</label>
                <textarea name="responsibilities1" rows="4"></textarea>
            </div>

            <div class="section">
                <h3>References</h3>
                <label for="ref_name1">Name:</label>
                <input type="text" id="ref_name1" name="ref_name1" required>

                <label for="ref_relationship1">Relationship:</label>
                <input type="text" id="ref_relationship1" name="ref_relationship1" required>

                <label for="ref_phone1">Phone Number:</label>
                <input type="tel" id="ref_phone1" name="ref_phone1" required>
            </div>

            <div class="section">
                <h3>Additional Information</h3>
                <label for="skills">Skills Relevant to the Position:</label>
                <textarea id="skills" name="skills" rows="4"></textarea>

                <label for="interest">Why are you interested in this position?</label>
                <textarea id="interest" name="interest" rows="4"></textarea>

                <label for="start_date">When can you start?</label>
                <input type="text" id="start_date" name="start_date">

                <label for="salary">Desired Salary:</label>
                <input type="text" id="salary" name="salary">
            </div>

            <div class="section">
                <h3>Declaration</h3>
                <p>I certify that the information provided is true and complete to the best of my knowledge. I understand that false information may lead to disqualification from the hiring process or termination if employed.</p>
                
                <label for="signature">Signature:</label>
                <input type="text" id="signature" name="signature" required>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <button type="submit">Submit Application</button>
        </form>
    </div>
</body>
</html>
