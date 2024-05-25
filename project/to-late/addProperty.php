<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/headerStyle.css">
    <link rel="stylesheet" href="./css/addProperty.css">
    <title>Add Property</title>
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

   


    <div class="container">
        <div class="left-panel">
            <div class="logo">
                <h1>THE TO-LET</h1>
                <p>HOUSE RENT SOLUTION</p>
            </div>
        </div>
        <div class="right-panel">
            <div class="form-container">
                <form id="uploadForm">
                    <!--

                        <div class="photo-upload">
                        <div class="photo-header">
                            Photos: 0 / 10 - You can add up to 10 photos.
                        </div>
                        <div class="photo-buttons">
                            <button type="button" class="add-photos-btn">Add photos</button>
                            <p>or drag and drop</p>
                        </div>
                    </div>

                    -->

                    <div class="upload-container">
                        <div class="upload-area" id="uploadArea">
                            <p>Photos: 0 / 10 - You can add up to 10 photos.</p>
                            <div class="upload-box">
                                <input type="file" id="fileInput" multiple hidden>
                                <div class="upload-content" id="uploadContent">
                                    <i class="icon">&#43;</i>
                                    <p>Add photos<br>or drag and drop</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="title">House Name</label>
                        <input type="text" id="title" name="HouseName" required>
                    </div>
                    <div class="form-group">
                        <label for="rent">Rent</label>
                        <input type="number" id="rent" name="rent" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category" name="category" required>
                            <option value="">Select Category</option>
                            <option value="category1">Family</option>
                            <option value="category2">Bachelor</option>
                            <option value="category2">Sublet</option>
                        </select>
                    </div>
        
                    <div class="room-description">
                        <div class="form-group">
                            <label for="Bed">Bed:</label>
                            <input type="number" id="Bed" name="bed">
                        </div>
                        <div class="form-group">
                            <label for="Bath">Bath</label>
                            <input type="number" id="Bath" name="Bath">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" required></textarea>
                    </div>
                    <div class="form-group">
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
                    </div>
        
                    <div class="form-group">
                        <label for="location">Address Line - </label>
                        <input type="text" id="adressLine" name="adressLine" required>
                    </div>
        
                    <div class="form-group">
                        <label for="availability">Availability</label>
                        <select id="availability" name="availability" required>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>
                    <button type="submit">Add Property</button>
                </form>
            </div>
        </div>
    </div>




    

    <script src="./js/addProperty.js"></script>
    <script src="./js/address.js"></script>
    
</body>
</html>

