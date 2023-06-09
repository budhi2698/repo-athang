<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Athang Learning Institute/home</title>
        
        <!-------------------------------------------------URL-IMG----------------------------------------------------->
        <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />
        <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
        <!-----------------------------------------------BROOTRAPS-LINK------------------------------------------------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="row py-1">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header col-md-12">
                        <h4>Student Registration Form<a href="/" class="btn btn-danger float-end">BACK</a></h4>
                    </div>
                    <div class="card-body">
                        <form  method="POST">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>DoB</label>
                                        <input type="number" name="dob" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div>
                                                    <label>Gender</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                                        <label class="form-check-label" for="male">Male</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" checked>
                                                        <label class="form-check-label" for="female">Female</label>
                                                    </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Present address</label>
                                        <input type="text" name="paddress" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Contact</label>
                                        <input type="number" name="contact" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>CID</label>
                                        <input type="number" name="cid" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="@gmail.com">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="py-1">Education Qualification</label>
                                        <input type="text" name="edu" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleDataList" class="form-label">Choose Course</label>
                                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Choose your course">
                                        <datalist id="datalistOptions">
                                            <option value="Dilopma in ICT">
                                            <option value="ECCD">
                                        </datalist> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="chooseCourse" class="form-label">Course Duration</label>
                                        <input class="form-control" list="listOptions" id="chooseCourse" placeholder="Course duration">
                                        <datalist id="listOptions">
                                            <option value="Two years for Dilopma">
                                            <option value="Six month for ECCD">
                                        </datalist> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="py-1">Why did you choose this course?</label>
                                        <input type="text" name="why" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label>Document</label>
                                <input type="file" name="file" class="form-control">
                                <div class="py-3">
                                    <h6>Necessary Document Require!</h6>
                                    <ol type="i">
                                        <li>Citizenship identity card and half photo</li>
                                        <li>Medical certificate (latest one)</li>
                                        <li>Academic transcript of class X and XII</li>
                                        <li>Curriculum vitae</li>
                                        <li>Your PDF file should be 2mb</li>
                                        <li>Your PDF file should be 2mb</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                       All above information are mandatory.
                                </label>
                            </div>
                            <div class="mb-3 py-3">
                                <button type="submit" name="save" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <!-----------------------------------------------BROOTRAPS-JAVA-SCRIPTS------------------------------------------>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

