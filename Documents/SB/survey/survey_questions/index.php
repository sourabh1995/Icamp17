<HTML>
<HEAD>
    <TITLE> Simply Bhand | Add Question </TITLE>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="style.css" type="text/css" rel="stylesheet"/>
        <link rel="shortcut icon" href="images/LOGOSIMPLY.png" />
    <SCRIPT language="javascript">
        function addRow(tableID) {

            var table = document.getElementById(tableID);

            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name="chkbox[]";
            cell1.appendChild(element1);

            var cell2 = row.insertCell(1);
            cell2.innerHTML = rowCount + 1;

            var cell3 = row.insertCell(2);
            var element2 = document.createElement("textarea");
            element2.type = "text";
            element2.name = "question[]";
            element2.classList.add("form-control");
            cell3.appendChild(element2);

            var cell4 = row.insertCell(3);
            var element4 = document.createElement("input");
            element4.type = "text";
            element4.name = "o1[]";
            element4.classList.add("form-control");
            cell4.appendChild(element4);

            var cell5 = row.insertCell(4);
            var element5 = document.createElement("input");
            element5.type = "text";
            element5.name = "o2[]";
            element5.classList.add("form-control");
            cell5.appendChild(element5);

            var cell6 = row.insertCell(5);
            var element6 = document.createElement("input");
            element6.type = "text";
            element6.name = "o3[]";
            element6.classList.add("form-control");
            cell6.appendChild(element6);

            var cell7 = row.insertCell(6);
            var element7= document.createElement("input");
            element7.type = "text";
            element7.name = "o4[]";
            element7.classList.add("form-control");
            cell7.appendChild(element7);

            var cell8 = row.insertCell(7);
            var element8 = document.createElement("input");
            element8.type = "text";
            element8.name = "o5[]";
            element8.classList.add("form-control");
            cell8.appendChild(element8);

            var cell9 = row.insertCell(8);
            var element9 = document.createElement("input");
            element9.type = "text";
            element9.name = "o6[]";
            element9.classList.add("form-control");
            cell9.appendChild(element9);

        }

        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
                


            }
            }catch(e) {
                alert(e);
            }
        }

    </SCRIPT>
</HEAD>
<BODY>

    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="http://simplybhand.com/"><img src="images/LOGOSIMPLY.png" style="max-width:60px; margin-top: -20px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

        
        <li><a href="http://simplybhand.com/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="section-title">
                <center><h2 class="demo-text">Add Survey Questions</h2></center>
                </div>
                <form method="POST" action="data_insert.php">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h3>Select Name</h3>
                            <select name="made_by" class="form-control" required>
                                <option value="Pragya">Pragya</option>
                                <option value="Sagar">Sagar</option>
                                <option value="Sourabh">Sourabh</option>
                                <option value="Madhurima">Madhurima</option>
                                <option value="Avirup">Avirup</option>
                                <option value="Shreya">Shreya Sarkar</option>
                                <option value="Parth">Parth</option>
                                <option value="Mridul">Mridul</option>
                                <option value="Prithvi">Prithvi</option>

                            </select>
                            
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h3>Survey Name</h3>
                            <input type="text" class="form-control" name="s_name">
                            
                        </div>

                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h3>Select Category</h3>
                            <select name="category" class="form-control" required>
                                <option value="1">Mandatory Survey</option>
                                <option value="2">Fashion</option>
                                <option value="3">News Affairs</option>
                                <option value="4">Literature and Books</option>
                                <option value="5">Tech n geeky</option>
                                <option value="6">Love n relation</option>
                                <option value="7">Personality</option>
                                <option value="8">Sports</option>
                                <option value="9">Entertainment</option>

                            </select>
                            
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h3>Description</h3>
                            <input type="text" class="form-control" name="description">
                            
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h3>Time (If any)</h3>
                            <input type="text" class="form-control" name="time">
                            
                        </div>

                    </div>
                </div>
                
                <br><br>

    <div class="table-responsive container-fluid">

    

    <TABLE id="dataTable" class="table" width="500px" border="1">
    
        <TR>
            <TD></TD>
            <TD> 1 </TD>
            <TD> Question  </TD>
            <TD> Option 1 </TD>
            <TD> Option 2 </TD>
            <TD> Option 3 </TD>
            <TD> Option 4 </TD>
            <TD> Option 5 </TD>
            <TD> Option 6 </TD>
        </TR>
    </TABLE>
    </div>
    <div class="container">
                <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="submit">
                        <input type="submit" value="Submit" name="Submit" id="button-blue" />
                            <div class="ease"></div>
                    </div>
                    </div>
                </div>
                </div>
    </form>
    <div class="container-fluid">
    <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <INPUT type="button" value="Add More Question" class="form-control btn btn-primary" onclick="addRow('dataTable')" />
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <INPUT type="button" value="Delete Question" class="form-control btn btn-warning" onclick="deleteRow('dataTable')" />
    </div>
    </div>
    </div>
    <br><br><br>
    <!-- Contact Section Start -->  
    <section id="contact_section">
        <div class="contact_section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="section-title">
                            <h2>Contact us.</h2>
                            <p></p>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="address_part">
                                <!--<div class="address">
                                    <i class="fa fa-map-marker"></i> Simply Bhand <br/>KIIT Campus <br/> Patia <br/> Bhubaneswar
                                </div>-->
                                <div class="phone">
                                    <i class="fa fa-phone"></i> +91&nbsp;707&nbsp;710&nbsp;0815
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope-o"></i> info@simplybhand.com
                                </div>
                                <div class="social_icons">
                                            <ul>
                                                <li><a href="https://www.facebook.com/SimplyBhand/" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook" data-rel="tooltip" class="icon_fb" ><i class="fa fa-facebook-square"></i></a></li>
                                                <li><a href="https://www.twitter.com/SimplyBhand/" data-toggle="tooltip" target="_blank" data-placement="top" title="Twitter" data-rel="tooltip" class="icon_twitter"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google+" target="_blank" data-rel="tooltip" class="icon_gplus"><i class="fa fa-google-plus-square"></i></a></li>
                                                <li><a href="https://www.linkedin.com/company/simply-bhand?trk=top_nav_home" target="_blank" data-toggle="tooltip" data-placement="top" title="Linkdin" data-rel="tooltip" class="icon_linkdin"><i class="fa fa-linkedin-square"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube" target="_blank" data-rel="tooltip" class="icon_youtube"><i class="fa fa-circle fa-youtube-square"></i></a></li>
                                                
                                            </ul>

                                </div>
                            </div>
                            
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="contact_form">
                                    <!--<div id="show_contact_msg"></div>
                                 Contact Form Start 
                                    <form method="post" id="contact_form" action="contact.php">
                                        <input type="text" id="contact_name" name="name" class="form-control contact_input_box wow fadeInUp" placeholder="Name" required/>
                                        <input type="email" id="contact_email" name="email" class="form-control contact_input_box wow fadeInUp" placeholder="E-mail" required/>
                                        <textarea id="contact_text" name="message" rows="5" cols="30" class="form-control contact_input_box wow fadeInUp" placeholder="Message" required></textarea>
                                        <button type="submit" class="btn btn-primary contact_button wow fadeInUp"> <i class="fa fa-send-o"></i>  Send message</button>
                                    </form>
                                 Contact Form End -->
                                 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=1033281556756308";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/SimplyBhand/" data-tabs="timeline" data-height="70" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SimplyBhand/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SimplyBhand/">Simply Bhand</a></blockquote></div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            </div>  
        </div>  
    </section>
  <!-- Contact Section End -->
</BODY>
</HTML>