<?php
    echo "
        <div class='formy bred'>
                     <h3>Register for New Account</h3>
                                  <div class='form'>
                                      <!-- Register form (not working)-->
                                      <form class='form-horizontal'>
                                          <!-- Name -->
                                          <div class='control-group'>
                                            <label class='control-label' for='name'>Name</label>
                                            <div class='controls'>
                                              <input type='text' class='input-large' id='name'>
                                            </div>
                                          </div>   
                                          <!-- Email -->
                                          <div class='control-group'>
                                            <label class='control-label' for='email'>Email</label>
                                            <div class='controls'>
                                              <input type='text' class='input-large' id='email'>
                                            </div>
                                          </div>
                                          <!-- Select box -->
                                          <div class='control-group'>
                                            <label class='control-label' for='select'>Drop Down</label>
                                            <div class='controls'>                               
                                                <select>
                                                <option>&nbsp;</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                </select>  
                                            </div>
                                          </div>                                           
                                          <!-- Username -->
                                          <div class='control-group'>
                                            <label class='control-label' for='username'>Username</label>
                                            <div class='controls'>
                                              <input type='text' class='input-large' id='username'>
                                            </div>
                                          </div>
                                          <!-- Password -->
                                          <div class='control-group'>
                                            <label class='control-label' for='email'>Password</label>
                                            <div class='controls'>
                                              <input type='password' class='input-large' id='password'>
                                            </div>
                                          </div>
                                          <!-- Checkbox -->
                                          <div class='control-group'>
                                             <div class='controls'>
                                                <label class='checkbox inline'>
                                                   <input type='checkbox' id='inlineCheckbox1' value='agree'> Agree with Terms and Conditions
                                                </label>
                                             </div>
                                          </div> 
                                          
                                          <!-- Buttons -->
                                          <div class='form-actions'>
                                             <!-- Buttons -->
                                            <button type='submit' class='btn'>Register</button>
                                            <button type='reset' class='btn'>Reset</button>
                                          </div>
                                      </form>
                                             Already have an Account? <a href='login.html'>Login</a>
                                    </div> 
                                  </div>
";
?>
