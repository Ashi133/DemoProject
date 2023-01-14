
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Insert Dept Data</title>
    <style>
        body {
            font-family: 'Lato';
            font-weight: 300;
            font-size: 1.25rem;
        }

        body {
            /* font-family: "Poiret One", cursive;   */
            font-family: 'Lato';
            background: #3494e6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient (to right,
                    #ec6ead,
                    #3494e6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient (to right,
                    #ec6ead,
                    #3494e6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        h4 {
            font-weight: bold;
            margin-bottom: 2.5rem;
            font-family: 'Lato';
            /* align: center;   */
            font-size: 2rem;
        }

        form {
            margin-top: 20px;
            margin-left: 250px;
        }

        p {
            margin-top: 20px;
            margin-left: 100px;
        }

        h4 {
            margin-top: 20px;
            margin-left: 100px;
        }

        p.note {
            font-size: 1rem;
            color: red;
        }

        input {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 4px;
            font-family: 'Lato';
            width: 300px;
            margin-top: 10px;
        }

        label {
            width: 300px;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
        }

        label span {
            font-size: 1rem;
        }

        label.error {
            color: red;
            font-size: 1rem;
            display: block;
            margin-top: 5px;
        }

        input.error {
            border: 1px dashed red;
            font-weight: 300;
            color: red;
        }

        [type="reset"],
        html [type="button"] {
            margin-left: 0;
            border-radius: 0;
            background: black;
            color: white;
            border: none;
            font-weight: 300;
            padding: 10px 0;
            line-height: 1;
        }

        button {
            margin-left: 0;
            border-radius: 0;
            background: black;
            color: white;
            border: none;
            font-weight: 300;
            padding: 10px 0;
            line-height: 1;
        }

        [type="submit"] {
            display: inline-block;
            padding: 0.35em 1.2em;
            border: 0.1em solid #3494e6;
            margin: 0 0.3em 0.3em 0;
            border-radius: 0.12em;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            text-align: center;
            margin-right: 240px;
            margin-top: 150px;
            transition: all 0.2s;
        }

        [type="submit"]:hover {
            color: #FFFFFF;
            background-color: #3494e6;
        }
    </style>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script>
    $(document).ready(function() {
        $("#basic-form").validate();
    });
</script>

<body>
    <center>
        <h4> ADD DEPARTMENT </h4>
    </center>
    <form id="basic-form" action="" method="post">
        <p>
            <label for="name"> Department Name <span class="error">*</span> </label>
            <input id="name" name="name" type="text" required>
        </p>
        <p>
            <label for="department"> Department Type <span class="error">*</span> </label>
            <select name="department" required>
                <option value="Java Developer">Java Developer</option>
                <option value="Android Developer">Android Developer</option>
                <option value="Php Developer">Php Developer</option>
                <option value="Python Developer">Python Developer</option>
                <option value="Dot.net Developer">Dot.net Developer</option>
                <option value="C Developer">C Developer</option>
            </select>
        </p>
        <p>
            <label for="add/block"> Address/Block<span class="error">*</span> </label>
            <input id="add/block" name="add/block" type="text" required>
        </p>
        <center>
            <p>
                <button type="submit" name="button" onclick="insert();">Add/Update</button>
            </p>
        </center>
    </form>
</body>
</html>