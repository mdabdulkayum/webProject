<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/headerStyle.css">
    <title>To-Late</title>
</head>
<body>
    
        <header >
            <div class="header">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="./img/logo.JPG">
                    </a>
                </div>
                <div class="header-inside">
                    <a href="addProperty.php" class="btn">
                        <img src="./img/add.png" alt="Add">
                        Add Property 
                    </a>
                    <a href="login.php" class="btn">
                        <span >Login / Register </span>
                    </a>
                </div>
            </div>
        </header>


        <div class="filters">
            <button><img src="./img/all.png"> All</button>
            <button><img src="./img/family.png"> Family</button>
            <button><img src="./img/bacelor.png"> Bachelor</button>
            <button><img src="./img/sublet.png"> Sublet</button>
            <button><img src="./img/search.png"> Search</button>
        </div>


        <div class="search-div">
            <form action="">
                <label for="divisions">Select Division</label>
                <select name="divisions" id="divisions" onchange="divisionsList();">
                    <option disabled selected>Select Division: </option>
                    <option value="Barishal">Barishal</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                </select>
                
                <label for="distr">Select District: </label>
                <select name="" id="distr" onchange="thanaList();"></select>
                
                <label for="polic_sta">Thana/Area: </label>
                <select name="" id="polic_sta"></select>

                
            </form>
            
           
            <div class="btn-advance" id="search">
                Apply
            </div>

            <div class="btn-advance" id="advanceSearch">
                <img src="./img/add.png" alt="Add">
                Advance 
            </div>
        </div>


        <div class="advance-search-div" id="advance-search-div">
            <form action="">
                <label for="divisions">For: </label>
                <select name="divisions" id="divisions" onchange="divisionsList();">
                    <option disabled selected>Select Division: </option>
                    <option value="Family">Family</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Sublet">Sublet</option>
                </select>
                
                <label for="distr">Price range: </label>
                <label for="distr">Min- </label>
                <input type="number" name="minPrice" >
                <label for="distr">Max- </label>
                <input type="number" name="maxPrice" >
            </form>
            <div class="btn-advance">
                Apply
            </div>
            
        </div>


        <main>
            <h2>All Property</h2>
            <div class="property-list">
                <div class="property-card">
                    <img src="property1.jpg" alt="Family Room Rent">
                    <h3>Family Room Rent</h3>
                    <p>Bed: 1, Bath: 1</p>
                    <p>To-let from: June</p>
                    <p>Rent: 8500 BDT</p>
                    <p>Mirpur 12, Mirpur</p>
                </div>
                <div class="property-card">
                    <img src="property2.jpg" alt="Family Flat Rent">
                    <h3>Family Flat Rent</h3>
                    <p>Bed: 3, Bath: 3</p>
                    <p>To-let from: July</p>
                    <p>Rent: 14000 BDT</p>
                    <p>Mirpur, Dhaka</p>
                </div>
                <div class="property-card">
                    <img src="property3.jpg" alt="Family Flat Rent">
                    <h3>Family Flat Rent</h3>
                    <p>Bed: 3, Bath: 3</p>
                    <p>To-let from: June</p>
                    <p>Rent: 22000 BDT</p>
                    <p>Joy Housing, Mohammadpur</p>
                </div>
                <div class="property-card">
                    <img src="property4.jpg" alt="Family Flat Rent">
                    <h3>Family Flat Rent</h3>
                    <p>Bed: 2, Bath: 2</p>
                    <p>To-let from: July</p>
                    <p>Rent: 13000 BDT</p>
                    <p>Adabor, Dhaka</p>
                </div>
                <div class="property-card">
                    <img src="property5.jpg" alt="Family House Rent">
                    <h3>Family House Rent</h3>
                    <p>Bed: 2, Bath: 2</p>
                    <p>To-let from: June</p>
                    <p>Rent: 10000 BDT</p>
                    <p>Manda, Mugda</p>
                </div>
                <div class="property-card">
                    <img src="property6.jpg" alt="Family Flat Rent">
                    <h3>Family Flat Rent</h3>
                    <p>Bed: 3, Bath: 3</p>
                    <p>To-let from: July</p>
                    <p>Rent: 18000 BDT</p>
                    <p>West Rampura, Rampura</p>
                </div>
            </div>
        </main>
    







    <!--
        <header style="display: flex;">
            <div class="header-logo">
                <a href="index.html">
                    <img src="./img/logo.JPG">
                </a>
            </div>
            <div>
                <div class="rcorners1">
                    <a href="addProperty" class="btn "> 
                        <img src="./img/add.png"> Add Property 
                    </a> 
                </div>
            </div>
            
            <div>
                Login/Registration
            </div>
        </header>

    -->

    <script src="./js/address.js"></script>
    <script src="./js/func.js"></script>


 
    
</body>
</html>