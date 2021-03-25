<div style="display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: rgba(94, 207, 94, 0.404); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; padding: 20px">
    <h5 style="font-style: italic; margin-bottom: 5px;">Welcome <span class="text-capitalize">{{ $registered["name"] }} !</span></h5>
    <h6 style="color: grey; margin-bottom: 5px">Your email address to connect is : {{ $registered["email"] }}</h6>
    <hr>
    <p style="margin-top: 10px">Your password is : <span class="text-danger">{{ $registered["password"] }}</span></p>
</div>