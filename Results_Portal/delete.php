<!-- Fully Completed -->
<!doctype html>
<html lang="en">

<head>
    <title>Delete data from database</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0%;
            margin-left: 0%;
            margin-right: 0%;
        }

        .header {
            display: flex;
            align-items: center;
            height: 15%;
            margin-top: -1%;
            border: 1.5px solid rgb(218, 85, 85);
            background-color: whitesmoke;
        }

        .logo {
            width: 100px;
            height: 90px;
            margin-left: 10px;
            /* Adjust the margin as needed */
        }

        .text {
            text-align: center;
            margin-top: 1%;
            ;
            flex-grow: 1;
            /* Allow text to expand and fill the remaining space */
        }

        h2,
        h3,
        h4 {

            margin-bottom: -2%;
        }

        h4 {
            color: rgb(39, 38, 38);
        }

        /* Add CSS rules for the form container */
        form {
            max-width: 500px;
            /* Adjust the maximum width as needed */
            margin: auto;
            height: auto;
            margin-top: 10px;
            /* Center the form horizontally */
            padding: 20px;
            display: block;
            border: 1px solid #ccc;
            background-color: lightcoral;
            border-radius: 10px;
        }

        /* Add CSS rules for form inputs */
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 1.5%;
        }

        /* Add CSS rules for the submit button */
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-left: 45%;
            font-size: 15px;
        }

        table {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        tr:nth-child(even) {
            background-color: #eee;
        }

        /* Add hover effect for the submit button */
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Add CSS rules for section headings */
        section h2 {
            color: #007bff;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        /* Add CSS rules for checkboxes */
        .items {
            margin-bottom: 10px;
        }

        /* Add additional styling as needed */
        label {
            font-weight: bold;
        }

        #wrong {
            margin-top: 2%;
            text-align: center;
            color: red;
            font-size: 30px;
        }

        #success {
            margin-top: 2%;
            text-align: center;
            color: #198754;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <header>
        <div class="header">
            <div>
                <img src="VVIT.png" class="logo">
            </div>
            <div class="text">
                <h2 style="margin-top:0% ;color:brown;">VASIREDDY VENKATADRI INSTITUTE OF TECHNOLOGY</h2>
                <h4 style="color:rgb(5, 150, 102);">(AUTONOMOUS)</h4>
                <h4>Approved by AICTE and permanently affiliated to JNTUK,</h4>
                <h4>Accredited by NAAC with 'A' grade, Accredited by NBA.</h4>
                <h4 style="margin-bottom:-0.5%;">Pedakakani(md) Guntur(dt) Andhra Pradesh.</h4>
                <br>

            </div>
        </div>
    </header>
    <br>

    <center>
        <h1 style='color:blue;'>DELETE DATA FROM DATABASE</h1>
    </center>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="year">Year:</label><br>
        <input type="text" name="year" value="<?php echo $_POST['year'] ?? ''; ?>" required>
        <label for="branch">Branch:</label>
        <select name="branch" required>
            <option value="civ" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'civ')
                echo 'selected'; ?>>CIVIL
                ENGINEERING</option>
            <option value="eee" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'eee')
                echo 'selected'; ?>>
                ELECTRICAL AND ELECTRONIC ENGINEERING</option>

            <option value="mec" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'mec')
                echo 'selected'; ?>>
                MECHANICAL ENGINEERING</option>
            <option value="ece" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'ece')
                echo 'selected'; ?>>
                ELECTRONICS AND COMMUNICATION ENGINEERING</option>
            <option value="cse" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'cse')
                echo 'selected'; ?>>
                COMPUTER SCIENCE ENGINEERING</option>
            <option value="inf" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'inf')
                echo 'selected'; ?>>
                INFORMATION TECHNOLOGY</option>
            <option value="csm" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'csm')
                echo 'selected'; ?>>
                COMPUTER SCIENCE AND MACHINE LEARNING</option>
            <option value="cic" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'cic')
                echo 'selected'; ?>>CYBER
                SECURITY INCLUDING BLOCKCHAIN TECHNOLOGY</option>
            <option value="cso" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'cso')
                echo 'selected'; ?>>
                COMPUTER SCIENCE AND ENGINEERING (IOT)</option>
            <option value="aid" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'aid')
                echo 'selected'; ?>>
                ARTIFICIAL INTELLIGENCE & DATA SCIENCE</option>
            <option value="aim" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'aim')
                echo 'selected'; ?>>
                ARTIFICIAL INTELLIGENCE & MACHINE LEARNING</option>

        </select>

        <label for="sem">Semester:</label>
        <select name="sem" required>
            <option value="1" <?php if (isset($_POST['sem']) && $_POST['sem'] === "1")
                echo 'selected'; ?>>1</option>
            <option value="2" <?php if (isset($_POST['sem']) && $_POST['sem'] === "2")
                echo 'selected'; ?>>2</option>
            <option value="3" <?php if (isset($_POST['sem']) && $_POST['sem'] === "3")
                echo 'selected'; ?>>3</option>
            <option value="4" <?php if (isset($_POST['sem']) && $_POST['sem'] === "4")
                echo 'selected'; ?>>4</option>
            <option value="5" <?php if (isset($_POST['sem']) && $_POST['sem'] === "5")
                echo 'selected'; ?>>5</option>
            <option value="6" <?php if (isset($_POST['sem']) && $_POST['sem'] === "6")
                echo 'selected'; ?>>6</option>
            <option value="7" <?php if (isset($_POST['sem']) && $_POST['sem'] === "7")
                echo 'selected'; ?>>7</option>
            <option value="8" <?php if (isset($_POST['sem']) && $_POST['sem'] === "8")
                echo 'selected'; ?>>8</option>

        </select>
        <input type="submit" name="submit" value="Delete">
    </form>
</body>


</html>

<?php

if (isset($_POST['submit'])) {
    $year = $_POST['year'];
    $branch = $_POST['branch'];
    $sem = $_POST['sem'];
    $tablename = $branch . $sem;
    $dbname = 'batch' . $year;
    $con = mysqli_connect("localhost:3307", "root", "");
    if (!$con) {
        exit("connection error!");
    }

    $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";

    // Execute the query
    $result = $con->query($query);

    // Check if the database not exists
    if (!($result->num_rows > 0)) {
        exit("<div id='wrong'>{$dbname} data not avaliable.</div>");
        //echo "{$dbname} data not avaliable.";
    }
    $conn = mysqli_connect("localhost:3307", "root", "", $dbname);

    $query = "SHOW TABLES";
    $result = $conn->query($query);

    if ($result) {
        $tableExists = false;

        // Check if the table exists in the database
        while ($row = $result->fetch_assoc()) {
            if ($row["Tables_in_" . $dbname] == $tablename) {
                $tableExists = true;
                break;
            }
        }

        if ($tableExists) {
            $query = "DROP TABLE $tablename";
            $res = mysqli_query($conn, $query);
            if ($res) {
                exit("<div id='success'>{$tablename} data deleted.</div>");
            }
        } else {
            exit("<div id='wrong'>No records found.</div>");
        }
    }


}

?>