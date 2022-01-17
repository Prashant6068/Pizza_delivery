<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
            <div class="container text-center">
             @foreach($details as $i)
               <p>
                   {{$i}}
               </p>
             @endforeach
            </div>
@include('includes.foot')
    </body>
</html>
