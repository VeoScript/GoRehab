
<!-- LOG IN MODAL DESIGN -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="webpage.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameText" placeholder="Enter Username" required>
              <small id="usernameText" class="form-text text-muted">Employee & Staffs Account Only.</small>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
            </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group btn-group-sm">
            <button type="submit" name="btnLogin" class="col-sm-12 btn btn-success">Login</button>
            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END -->

<!-- ABOUT MODAL DESIGN -->
<div class="modal fade" id="AboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END -->

<!-- BIBLE VERSE MODAL DESIGN -->
<div class="modal fade" id="BibleVerseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleMModaodalLabel">Update Bible Verse for Today</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="index.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <textarea class="form-control" name="verse" id="verse" cols="30" rows="10" placeholder="Write Bible verses here..." required></textarea>
          </div>
          <div class="form-group">
            <label for="book">Book, Chapter and Verse</label>
            <input type="text" class="form-control" id="book" name="book" required>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group btn-group-sm">
            <button type="submit" name="btnUpdateBible" class="col-sm-12 btn btn-success">Update</button>
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END -->

<!-- CREATE ACCOUNT MODAL DESIGN -->
<div class="modal fade" id="CreateAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleMModaodalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="useraccount.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile02" name="profilepic" accept="/image">
                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Profile Picture</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="idnumber">Employee ID Number</label>
                <input type="text" class="form-control" name="idnumber" id="idnumber" required>
              </div>
              <div class="form-group">
                <label for="fullname">Employee Name</label>
                <input type="text" class="form-control" name="fullname" id="fullname" required>
              </div>
              <div class="form-group">
                <label for="position">Employee Position</label>
                <select class="form-control" name="position" id="position" required>
                  <option text=""></option>
                  <option text="Manager">Manager</option>
                  <option text="Employee">Employee</option>
                  <option text="HR ADMIN">HR ADMIN</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="username">Create Username</label>
                <input type="text" class="form-control" name="username" id="username" required>
              </div>
              <div class="form-group">
                <label for="password">Create Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
              <div class="form-group">
                <label for="repassword">Re-Enter Password</label>
                <input type="password" class="form-control" name="repassword" id="repassword" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group btn-group-sm">
            <button type="submit" name="btnCreate" class="btn btn-success">Create</button>
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END -->


<!-- REHABILITATION MEMBERSHIP REGISTRATION MODAL DESIGN -->
<div class="modal fade" id="RegistrationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleMModaodalLabel">GoRehab Membership Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="idnumber">Member's ID</label>
                <input type="text" class="form-control" name="idnumber" id="idnumber" required>
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender" required>
                  <option text=""></option>
                  <option text="Manager">Male</option>
                  <option text="Employee">Female</option>
                </select>
              </div>
              <div class="form-group">
                <label for="birthdate">Birthdate</label>
                <input type="date" class="form-control" name="birthdate" id="birthdate" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="age">Age</label>
                <input type="number" min="1" max="70" class="form-control" name="age" id="age" required>
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" required>
              </div>
              <div class="form-group">
                <label for="contact">Contact</label>
                <input type="number" min="0" class="form-control" name="contact" id="contact" required>
              </div>
              <div class="form-group">
                <label for="datemembership">Date of Membership</label>
                <input type="date" value="datenow" class="form-control" name="datemembership" id="datemembership" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group btn-group-sm">
            <button type="submit" name="btnRegister" class="btn btn-success">Register</button>
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END -->

<!-- MY ACCOUNT / UPDATE ACCOUNT MODAL DESIGN -->
<div class="modal fade" id="UpdateMyAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleMModaodalLabel">My Account | <i><small>Update Account</small></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="useraccount.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-4">
              <img src="upload/<?php echo $displayprofilepic;?>" alt="Profile Picture" class="img-responsive img-thumbnail rounded" width="150" height="160">
              <div class="form-group">
                <input type="file" class="form-control btn-sm mt-3" name="profilepic" id="profilepic" value="<?php echo $displayprofilepic;?>" requried>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="idnumber">Employee ID Number</label>
                <input type="text" class="form-control" name="idnumber" id="idnumber" value="<?php echo $getidnumber;?>" readonly>
              </div>
              <div class="form-group">
                <label for="fullname">Employee Name</label>
                <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $getfullname;?>" required>
              </div>
              <div class="form-group">
                <label for="position">Employee Position</label>
                <select class="form-control" name="position" id="position" required>
                  <option text="<?php echo $getposition;?>"><?php echo $getposition;?></option>
                  <option text="Manager">Manager</option>
                  <option text="Employee">Employee</option>
                  <option text="HR ADMIN">HR ADMIN</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="username">Create Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $getusername;?>" required>
              </div>
              <div class="form-group">
                <label for="password">Old Password</label>
                <input type="password" class="form-control" name="oldpassword" id="oldpassword" required>
              </div>
              <div class="form-group">
                <label for="repassword">New Password</label>
                <input type="password" class="form-control" name="newpassword" id="newpassword">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group btn-group-sm">
            <button type="submit" name="btnUpdate" class="btn btn-warning">Update</button>
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END -->
