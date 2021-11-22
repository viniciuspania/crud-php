<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="./assets/js/materialize.min.js"></script>

<script>
    M.AutoInit();
</script>

<script>
    var myVar = setInterval(myTimer, 1000);

    function myTimer() {
        var d = new Date();
        var t = d.toLocaleTimeString();
        document.getElementById("horariolocal").innerHTML = `Horário Local: ${t}`;
    }
</script>


</body>

</html>