 <!-- contact -->
<div id="contact" class="request">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="bg-success">
               @if(session()->has('message'))
               <div class="text-center alert alert-success">
                   {{ session()->get('message') }}
               </div>
           @endif
             </div>
             <div class="titlepage">
                <h2>Contacteaza-ne</h2>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>
                incididunt ut labore et dolore magna</span>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-sm-12">
             <div class="black_bg">
                <div class="row">
                   <div class="col-md-7 ">
                      <form method="POST" action="contactus" class="main_form">
                         {{ csrf_field() }}
                         <div class="row">

                            <div class="col-md-12 ">
                               <!-- Error -->
                               @if ($errors->has('name'))
                               <div class="error">
                                     {{ $errors->first('name') }}
                               </div>
                               @endif  
                               <input class="contactus {{ $errors->has('name') ? 'error' : '' }}" placeholder="Nume" type="text" name="name" id="name">
                            </div>
                            
                            <div class="col-md-12">
                               <!-- Error -->
                               @if ($errors->has('phone'))
                               <div class="error">
                                     {{ $errors->first('phone') }}
                               </div>
                               @endif                               
                               <input class="contactus  {{ $errors->has('phone') ? 'error' : '' }}" placeholder="Telefon" type="text" name="phone" id="phone">
                            </div>
                            
                            <div class="col-md-12">
                               <!-- Error -->
                               @if ($errors->has('email'))
                               <div class="error">
                                     {{ $errors->first('email') }}
                               </div>
                               @endif                               
                               <input class="contactus  {{ $errors->has('email') ? 'error' : '' }}" placeholder="Email" type="text" name="email" id="email">
                            </div>
                            
                            <div class="col-md-12">
                               <!-- Error -->
                               @if ($errors->has('msg'))
                               <div class="error">
                                     {{ $errors->first('msg') }}
                               </div>
                               @endif                               
                               <textarea class="textarea  {{ $errors->has('msg') ? 'error' : '' }}" placeholder="Mesaj" type="text" name="msg" id="msg"></textarea>
                            </div>
                            
                            <div class="col-sm-12">
                               <button type="submit" name="send" value="Submit" class="send_btn">Trimite</button>
                           </div>

                         </div>
                      </form>
                   </div>
                   <div class="col-md-5">
                      <div class="mane_img">
                         <figure><img src="{{ asset('assets/images/mane_img.jpg') }}" alt="#"/></figure>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- contact -->