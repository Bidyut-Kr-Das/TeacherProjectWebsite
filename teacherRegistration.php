<?php
include("header.php");
include("connection.php");
$query1 = "SELECT * FROM `class-table`";
$res1 = mysqli_query($connection, $query1);
$query2 = "SELECT * FROM `subject-table`";
$res2 = mysqli_query($connection, $query2);


?>

<div>
    <!--@ left side form -->
    <div class="lg:w-3/5 w-full z-10 bg-white/50 backdrop-blur-sm py-8 px-4">
        <!-------Headings------->
        <div class="flex gap-10 lg:mx-12 mx-0 w-full flex-col md:flex-row">
            <div class=" font-bold font-sans text-4xl w-1/2">Teacher's<br>Registration</br>form</div>
            <div class="md:w-1/2 w-3/5 ">We need you to help us with some basic <br>information for your profile creation. Here are our</br><span class="text-blue-600 font-bold">terms and conditions.</span> Please read them carefully.</br></div>
        </div>

        <img src=" ./Img/Line 7.svg" alt="" class="lg:mx-12 mx-0 mt-10 w-[48rem]">
        <!-- Main form -->
        <div class="flex flex-col mt-10 lg:mx-12 mx-0 w-full gap-10">
            <!--* row 1 -->
            <div class="flex gap-10 w-full justify-between md:flex-row flex-col">
                <div class="flex flex-col gap-4 w-full">
                    <label for="firstName" class=" font-semibold w-full">First name</label>
                    <input type="text" id="firstName" placeholder=" First name" name="firstName" class=" h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md" autocomplete="off">
                </div>
                <div class="flex flex-col gap-4 w-full">
                    <label class="font-semibold">Last name</label>
                    <input type="text" id="lastName" placeholder=" Last name" name="lastName" class="h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md" autocomplete="off">
                </div>
            </div>
            <!--* row 2 -->
            <div class="flex gap-10 w-full justify-between md:flex-row flex-col">
                <div class="flex flex-col gap-4 w-full">
                    <label class=" font-semibold w-full">Phone number</label>
                    <input type="number" placeholder="Enter your Ph.no" name="phoneNumber" class=" h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md" id="phoneNumber" autocomplete="off">
                </div>
                <div class="flex flex-col gap-4 w-full">
                    <label class="font-semibold">Email</label>
                    <input type="email" placeholder="Enter your mail" name="studLName" class="h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md" id="email" autocomplete="off">
                </div>
            </div>
            <!--* row 3 -->
            <div class="flex gap-10 w-full justify-between md:flex-row flex-col">
                <div class="flex flex-col gap-4 w-full">
                    <label for="gender" class=" font-semibold w-full">Gender</label>
                    <select name="gender" id="gender" class="h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md">
                        <option class="capitalize text-black/50" selected value="">Select your gender</option>
                        <option class="" value="Male">Male</option>
                        <option class="" value="Female">Female</option>
                        <option class="" value="Others">Others</option>
                    </select>
                </div>
                <div class="flex flex-col gap-4 w-full">
                    <label class="font-semibold">Age</label>
                    <input type="number" placeholder="Enter your age" name="age" id="age" class="h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md">
                </div>
            </div>
            <!--* row 4 -->
            <div class="flex gap-10 w-full justify-between md:flex-row flex-col">
                <div class="flex flex-col gap-4 w-full">
                    <div class="flex justify-between w-full">
                        <label class=" font-semibold">Experience(optional)</label>
                        <img src=" ./Img/Vector.svg" alt="" class="h-5 " title="(Enter in terms of year eg: enter 4 for 4 years)">

                    </div>
                    <input id="experience" type="number" placeholder="Enter your experience" name="experience" class=" h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md" autocomplete="off">
                </div>
                <div class="flex flex-col gap-4 w-full">
                    <div class="flex justify-between w-full">
                        <label class=" font-semibold">Qualificaiton</label>
                        <img src=" ./Img/Vector.svg" alt="" class="h-5 " title="(eg: B.tech, M.Tech)">

                    </div>
                    <input id="qualification" type="text" placeholder="Enter your Qualification" name="qualification" class="h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md" autocomplete="off">
                </div>
            </div>
            <!--* row 5 -->
            <div class="flex gap-10 w-full justify-between md:flex-row flex-col">
                <div class="flex flex-col gap-4 w-full">
                    <div class="flex justify-between w-full">
                        <label class=" font-semibold">Address</label>
                        <img src=" ./Img/Vector.svg" alt="" class="h-5 " title="eg:Sector V, Naihati, Kharda etc.">

                    </div>
                    <input id="address" type="text" placeholder="Enter your Area" name="studFName" class=" h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md" autocomplete="off">
                </div>
                <div class="flex flex-col gap-4 w-full">
                    <label class="font-semibold">State</label>
                    <input type="text" placeholder="Enter your State" name="studLName" class="h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md" id="state" autocomplete="off">
                </div>
            </div>
            <!--* row 6 (line img) -->
            <img src=" ./Img/Line 7.svg" alt="" class=" mt-5 w-[48rem] mb-5">
            <!--* row 7 -->
            <div id="cloningElement" class="relative flex gap-10 w-full justify-between md:flex-row flex-col">
                <div class="flex flex-col gap-4 w-full">
                    <label class=" font-semibold w-full">Class</label>
                    <select name="classes" id="classes" class="h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md">
                        <option class="capitalize text-black/50" selected value="null">Select your Class</option>
                        <?php
                        while ($rowarr1 = mysqli_fetch_array($res1)) {
                        ?>
                            <option value="<?php echo $rowarr1['id']; ?>"><?php echo $rowarr1['className']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class=" flex flex-col gap-4 w-full">
                    <div class=" flex justify-between w-full">
                        <label class=" font-semibold w-full">Subject</label>

                    </div>
                    <select name="subjects" id="subjects" class="h-16 w-full outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md">
                        <option class="capitalize text-black/50" selected value="null">Select your subject</option>
                        <?php
                        while ($rowarr2 = mysqli_fetch_array($res2)) {
                        ?>
                            <option value="<?php echo $rowarr2['id']; ?>"><?php echo $rowarr2['subjectName']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <img id="delRow" class="hidden delRow md:static absolute top-0 right-0 cursor-pointer h-4 pt-0 md:pt-8 md:h-auto md:w-auto w-4 my-auto" src=" ./Img/ui-buttons/cross.svg" alt="" onclick="deleteThis(this)">
            </div>
            <!--* row-infinite-cloning area -->
            <div id="cloningArea" class="flex gap-10 w-full justify-between  flex-col">

            </div>
            <!--* row 8(addrow btn)  -->
            <div class="flex flex-col gap-4 w-full">
                <button id="addRow" class="h-16 w-48 outline-none border-2 border-black/20 px-4 bg-transparent backdrop-blur-md text-lg">Add row</button>
            </div>
            <!--* row 9 (submit section) -->
            <div class=" flex flex-col gap-8 sm:flex-row justify-between w-full pb-8">
                <div class=" flex flex-row gap-4 mt-8">
                    <input id="tnc" type="checkbox" class="h-4 w-4">
                    <label for="tnc" class="leading-3">I accept the <span class="text-blue-600 font-bold">terms and conditions</span></label>
                </div>
                <div class="">
                    <input id="teacherRegSubBtn" type="submit" class="rounded-3xl bg-blue-600 text-white font-bold h-12 w-full sm:w-60 cursor-pointer " value="Register">
                </div>
            </div>

        </div>
    </div>
    <!--@ right side image -->
    <div class="w-2/5">
        <img src=" ./Img/Layer 12.svg" alt="" class="fixed top-0 right-0 h-screen -z-10 ">
    </div>
</div>
<?php
include("footer.php");

?>