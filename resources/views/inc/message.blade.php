 @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
 @if (session()->get('success') != null)
     <h3 class="alert alert-success text-center">{{ session()->get('success') }}</h3>
 @endif
