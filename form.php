<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="123.js" defer></script>
</head>

<body style="background-image: url(./images/image\ \(6\).jpg);">
    <h1 class="p-3 mb-2 bg-success bg-gradient text-warning" style="text-align: center; font-family: 'Franklin Gothic Medium';">About Yourself</h1><br><br>

    <div class="container border border-success border-5 rounded" style="background-image: url(./images/image\ \(5\).jpg);">
        <form name="form" onsubmit="return validateForm()" method="get" enctype="multipart/form-data"><br><br>

            <h1 class="p-3 mb-2 bg-success bg-gradient text-white" style="font-family: 'Courier New'; text-align: center;"><b>Personal Details:</b></h1><br>

            <div class="mb-3 text-white">
                <label for="fname" class="form-label" style="font-family:cursive;">
                    <h5><b>First name: <span class="text-danger">*</span></b></h5>
                </label>
                <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control" />
                <span class="text-danger fname-not-found"></span>
            </div>

            <div class="mb-3 text-white">
                <label for="lname" class="form-label" style="font-family:cursive ;">
                    <h5><b>Last name: <span class="text-danger">*</span></b></h5>
                </label>
                <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control" />
                <span class="text-danger lname-not-found"></span>
            </div>

            <div class="mb-3 text-white">
                <label for="contactn" class="form-label" style="font-family:cursive;">
                    <h5><b>Contact No.: <span class="text-danger">*</span></b></h5>
                </label>
                <input type="number" name="contactn" id="contactn" placeholder="Contact Number" class="form-control" />
                <span class="text-danger contact-not-found"></span>
            </div>

            <div class="mb-3 text-white">
                <label for="email" class="form-label is-invalid" style="font-family:cursive;">
                    <h5><b>Email: <span class="text-danger">*</span></b></h5>
                </label>
                <input type="email" name="email" id="email" placeholder="Email Address" class="form-control" />
                <span class="text-danger email-not-found"></span>
            </div>

            <div class="mb-3 text-white">
                <label for="dob" class="form-label" style="font-family:cursive;">
                    <h5><b>DOB:&nbsp&nbsp&nbsp</b></h5>
                </label>
                <input type="date" name="dob" id="dob" class="form-control" />
            </div>

            <div class="mb-3 text-white" style="font-family:cursive;">
                <h5><b>Gender:&nbsp&nbsp&nbsp&nbsp</b></h5><input type="radio" name="Gender" id="Male" class="form-check-input" />&nbsp&nbspMale&nbsp&nbsp
                <input type="radio" name="Gender" id="Female" class="form-check-input" />&nbsp&nbspFemale&nbsp&nbsp
                <input type="radio" name="Gender" id="Female" class="form-check-input" />&nbsp&nbspOther
            </div>

            <div class="mb-3 text-white" style="font-family:cursive;">
                <h5><b>State:&nbsp&nbsp</b></h5><select class="form-control" id="state">
                    <option value="0">Province</option>
                    <option value="1">Province 1</option>
                    <option value="2">Province 2</option>
                    <option value="3">Province 3</option>
                    <option value="4">Province 4</option>
                    <option value="5">Province 5</option>
                    <option value="6">Province 6</option>
                    <option value="7">Province 7</option>
                </select><br>

                <div class="mb-3 text-white" style="font-family:cursive;">
                    <h5><b>Bio:</b></h5><textarea class="form-control" rows="3" placeholder="ABOUT YOURSELF"></textarea>
                </div>

                <div class="mb-3 text-white" style="font-family:cursive;">
                    <h5><b>Upload your image:</b></h5>
                    <input type="file" class="form-control-file" name="image" alt="Your image is here"><br><br>
                    <h5><b>Select the sports that you like:</b></h5>
                    <input type="checkbox" name="Sports" value="Football" class="form-check-input" /> Football &nbsp&nbsp
                    <input type="checkbox" name="Sports" value="Basketball" class="form-check-input" /> Basketball &nbsp&nbsp
                    <input type="checkbox" name="Sports" value="Cricket" class="form-check-input" /> Cricket &nbsp&nbsp
                </div><br>

                <div class="mb-1 text-white" style="font-family:cursive;">
                    <input type="submit" name="submit" class="btn btn-success" value="Submit" onclick="formSubmit()" />
                    &nbsp&nbsp
                    <input type="reset" class="btn btn-primary" value="Reset" onclick="formReset()" /><br><br>
                    <span class="text-success form-submitted"></span>
                </div>
                </fieldset>
        </form>
    </div>
</body>

</html>