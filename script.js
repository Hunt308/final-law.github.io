const menuToggle = document.querySelector('.toggle');
        const navigation = document.querySelector('.nav-bar');
        menuToggle.onclick = function(){
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }