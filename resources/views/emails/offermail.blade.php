<a href="/" style=" display: block; margin-left: auto; margin-right: auto; width: 50%; text-align:center; margin-bottom:20px;">
   {{-- <img src="{{asset('assets/images/logo-footer.png')}}"> --}}

</a>
  <div style="margin: auto; height: fit-content; width: 800px; background: #F4F4F4; text-align: left; padding: 20px 40px; border-radius: 15px; box-sizing:
   border-box; font-family: 'Poppins';">
    <p style="font-size:20px; line-height: 7px;"><strong>Dear, <span style="color: #38AF88 "> Diferso <span></strong></p>
    <p> Below is the message sent by <span style="color: #38AF88 "> {{$data['name']}}  </span>. Please reply to the message below to <strong> {{$data['email']}} </strong>
    </p>
    <p style="font-size: 17px; line-height: 15px; margin: 20px ​0 10px 0"><strong>Subject : </strong></p>
    <p style="margin: 0">Mail Offer</p>
    <br>
    <p style="font-size: 17px; line-height: 15px; margin:20px ​0 10px 0;"><strong>Services request : </strong></p>
    <p style="margin: 0; line-height: 20px">{{$data['services']}}</p>
    <br>
    <p style="font-size: 17px; line-height: 15px; margin:20px ​0 10px 0;"><strong>Budget range : </strong></p>
    <p style="margin: 0; line-height: 20px">{{$data['budgets']}}</p>
    <br>
    <p style="font-size: 17px; line-height: 15px; margin:20px ​0 10px 0;"><strong>Company name : </strong></p>
    <p style="margin: 0; line-height: 20px">{{$data['company']}}</p>
    <br>
    <p style="font-size: 17px; line-height: 15px; margin:20px ​0 10px 0;"><strong>Messages : </strong></p>
    <p style="margin: 0; line-height: 20px">{{$data['messages']}}</p>
    <br>
    <hr>
    <p style="font-size:12px;">This email is sent via the contact form on the Tekenens Contact page (<a
    href="https://tekenens.com/contact/">https://tekenens.com/contact/</a>)<p>
  </div>
