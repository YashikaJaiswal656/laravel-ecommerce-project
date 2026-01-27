<footer>


<p>Copyright © 2025 HexaShop Co., Ltd. All Rights Reserved. by <b>Yashika</b>
</p>

</footer>
<script>
    const icon=()=>{
        const side_bar=document.querySelector(".side_bar");
        const menu_icon=document.querySelector(".menu_icon");
        if(side_bar.classList.contains("show")){
side_bar.classList.remove("show")
menu_icon.classList.remove("fa-times")
menu_icon.classList.add("fa-bars")
        }
        else{
            side_bar.classList.add("show")
            menu_icon.classList.add("fa-times")
menu_icon.classList.remove("fa-bars")
        }
    }
    
</script>