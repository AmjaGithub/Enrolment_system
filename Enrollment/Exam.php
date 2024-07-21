


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</head>
<body class="p-10 text-gray-800">

    <section class="bg-purple-100 rounded-2xl p-5">
        <div class="container mx-auto">   
            <div class="flex">
                <a href="new.html" class="text-2xl font-bold pr-5 border-r border-purple-300 mr-5 ">Enrollment</a>
                <div class="my-auto">
                    <u class="flex border font-bold text-gray-600 list-none decoration-0">
                    <li class="pr-5"><a href="index.html"  class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Home</a></li>
                <li class="pr-5"><a href="Notes.html"  class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Student Notes</a></li>
                <li class="pr-5"><a href="studentpayment.html" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Online Payment</a></li>
        
                <li class="pr-5"><a href="allexams.php" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Exam Application </a></li>
              
                        
                    </u>
                </div>
                <a href="Studenadd.php" class="text-medium bg-red-500 text-white px-3 py-2 rounded font-bold ml-auto">Register</a>
            </div>
        </div>

    </section>





    <section class="bg-sky-100 rounded-2xl p-10 mt-5 ">

    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md mt-5">
        <h1 class="font-serif font-bold text-center ">Application For the semester examination (Repeat)</h1><br>

            <form action="exadd.php" method="POST">

               

                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Full Name: </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="fname" required>
                </div>

                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name With initials: </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" required>
                    </div>
    
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Contact No: </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="contact_no" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="mail"> Email Id: </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="mail" type="email" name="mail" required>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="dep"> Gender: </label>
                        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="Genter" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Nic: </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="nic" required>
                        </div>

                    

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Student Id: </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="student_id" required>
                        </div>

                   
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="dep"> Department: </label>
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="dep" required>
                                <option value="">Select</option>
                                <option value="HNDIT">HNDIT</option>
                                <option value="HNDE">HNDE</option>
                                <option value="HNDA">HNDA</option>
                            </select>
        
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Recipt No for Payment of Examination fee: </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="fee" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Repeat Subject of the Examination (Year,Semester): </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="repet" required>
                                </div>
                
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dep"> Indicate the attempt under witch you sit this Examination Whether: </label>
                                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="attempt" required>
                                        <option value="">Select</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                        <option value="4th">4th</option>
                                    </select>
                
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Subject Code(s) and Names (s) of the Examination/Assignment you are applying for: </label>
                                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name"  name="Sname" required>
                                        Enter Your Message here.
                                    </textarea>
                                    </div>


                                 
                                  <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Attach the Recipt: </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="file" name="picture" required>
                                    </div>
                
                          <div class="flex items-center justify-between">
                        <input class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Register">
                       </div>

            </form>
        </div>

   
    </section> 

    <!-- <script>

       swal("Good job!", "You clicked the button!", "success");

        </script> -->




</body>
</html>
