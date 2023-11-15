<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report hostel problems</title>
    <style>
        *{




        }
        img.a{
            display: block;
            margin-left: auto;
            margin-right:auto;
            margin-top: 50px;


            width: 30%;
            height: 15%;
            border: 3px solid black;


        }
        img.mini{
            width:100px;
            display: block;
            float: left;
            border: none;
            margin:none;
        }


        h1{
            text-align:center ;
            display: inline-block;
            background-color:black;
            color: white;
        }
        input[type=text],select{

            display: inline-block;
            border: 1px solid black;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: center;

            }
            div{

                text-align: center;
                display: inline-block;

                padding: 30px;
                background-position: 20%;

                background-color: azure;

            }

            input[type=number],select{

            display: inline-block;
            border: 1px solid black;
            border-radius: 4px;
            box-sizing: border-box;
            background-position: 50%;


            }
            label{
                font-size: 20px;
            }

            button{
                width: 50%;
                background-color: green;
                color: black;
                padding: 14px 20px;


            }
            button:hover{
                background-color: blue;
            }

            .background {
    /* Set the background image */
    background-image: url('https://images.shiksha.com/mediadata/images/1591109353php1gJhFC.jpeg');

    /* Set background image properties */
    background-repeat: no-repeat;
    background-size: cover; /* Adjust based on your requirement */
    background-position: center center;

    /* Set other styles for the content */
    padding: 20px;

    width: 100%;
    height: 200%;
    opacity: 80%;

}



    </style>
</head>
<body >
    <div class="background">
    <img class="mini" src="https://woxsen.edu.in/uploads/L20230526052817.webp"/>
    <br/>
    <br/>
    <br/>
    <br/>

    <h1>REPORT HOSTEL PROBLEMS</h1>
    <br/>
    <br/>


    <div>
        <form class="a" action='connect.php' method="POST">
            <label for="Name"> Name</label>
            <br/>
            <input type="text" pattern="[A-Za-z .]+" title="only character are allowed" placeholder="enter your name" name="Name" required/>
            <br/>
            <br/>
            <label for="Application_ID" >Application_ID</label>
            <br/>
            <input type="text"  placeholder="enter your ID" name="Application_ID" pattern="[0-9]+" title="please enter exactly 5 digits"  maxlength="5" required/>
            <br/>
            <br/>
            <label for="Mobile_number">Mobile_number</label>
            <br/>
            <input type="text"    placeholder="enter your Mobile number" name="Mobile_number" pattern="[0-9]+" title="please enter exactly 10 digits"  maxlength="10" required/>
            <br/>
            <br/>
            <label for="hostel_block">Hostel_block</label>
            <br/>
            
            <label>
             <input type="radio" name="hostel_block" value="T1"> Tower 1
            </label>

            <label>
             <input type="radio" name="hostel_block" value="T2"> Tower 2
            </label>
            <br/>

            <label>
             <input type="radio" name="hostel_block" value="A"> A-Block
            </label>
            

            <label>
             <input type="radio" name="hostel_block" value="B"> B-Block
            </label>
            <br/>


            <label>
             <input type="radio" name="hostel_block" value="C"> C-Block
            </label>

            <label>
             <input type="radio" name="hostel_block" value="D"> D-Block
            </label>
            <br/>

            <label>
             <input type="radio" name="hostel_block" value="E"> E-Block
            </label>

            <label>
             <input type="radio" name="hostel_block" value="F"> F-Block
            </label>

  

                <br/>
                <br/>
                <label for="Room_number">Room_number</label>
                <br/>
                <input type="text" placeholder="enter your Room number" name="Room_number" pattern="[0-1224]+" title="please enter correct room number" maxlength="4" required/>
                <br/>
                <br/>
                <label for="Type_of_problem">Type_of_problem</label>
                <br/>
                <select name="Type_of_problem" >
                    <option >--- Select Problem Type-----</option>
                    <option >cleaning</option>
                    <option >plumber</option>
                    <option >electrical</option>
                    <option >carpenter</option>
                    <option >others</option>
                
                </select>
                <br/>
                <br/>
                <label for="Report_your_problem">Report_yourproblem</label>
            <br/>

            <input type="text"  placeholder="your problem" name="Report_your_problem" required/>
            <br/>
            <br/>

            <button>submit</button>




        </form>
    </div>

</div>


</body>
</html>


    