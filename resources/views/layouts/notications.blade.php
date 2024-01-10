<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações | Receitas </title>
    <link rel="stylesheet" href="/css/home.css">  

</head>
<body >
<body onload="myNotification('{{$userData->id}}', '{{ $users}}')">
    
<header class="Notifyheader">
    <span class='Logo'>Rece<strong>itas</strong> </span>
    <ul class='ulHeader'>
    <!-- <li class='active'>Inicio</li> -->
         <li><a href="{{ route('home')}}"> Inicio</a></li>
        <li><a href="{{ route('myReceitas')}}"> Minhas Receitas</a></li>
        <li><a href="{{ route('notification')}}"> Notificações</a></li>
        <li><a href=" "> Perfil </a></li>
    </ul>
    <div class="singInOut">
        <span>Olá {{ $userData -> first_name}} {{ $userData -> last_name}}</span>
        <nav>
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class='logoutBtn'>Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </nav>
    </div>
</header>
<div class="NotifyContainer">

   

    
</div>
</body>

<script>
      const  myNotification = async (userId, users ) => {
            const response = await fetch(`http://localhost:8000/api/myNoyifies/${userId}`)

            const data = await response.json()


            const NotifyContainer = document.querySelector('.NotifyContainer')

            for (const notification of data) {
                // const notifiedBy_user = users.find(user=> user.id === Number(notifiedBy_id))
                // console.log(notifiedBy_user);
                if (notification.receitaUserId == userId) {
                    if (notification.type =='shared') {
                        var notifySMS = ` <span>O </span>`
                    }
                    

                    NotifyContainer.innerHTML +=  `
                <div class="contentNotify">
                        <div class="HotifyHeader">
                            <div class="userImgNotify">
                                <!-- <img src="" alt=""> -->
                                <span>FD</span>
                            </div>
                            <div class="userDataNotify">
                                <span>Nome do cara</span>
                                <p>email do cara</p>
                            </div>        
                        </div>
                        <div class="contextNotify">
                            ${notifySMS}
                        
                            
                        </div>
                    </div>
                `
                }
            }
            

          

            console.log(data);
        }
</script>
</html>