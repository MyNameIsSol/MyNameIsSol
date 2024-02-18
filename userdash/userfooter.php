

    <!-- Javascript -->
    <script src="bundles/libscripts.bundle.js"></script>
    <script src="bundles/vendorscripts.bundle.js"></script>

    <script src="bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
    <script type="text/javascript"></script>
    <script src="bundles/chartist.bundle.js"></script>
    <script src="bundles/datatablescripts.bundle.js"></script>

    <script src="bundles/mainscripts.bundle.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="js/index7.js"></script>
    <script src="../js/sweetalert.min.js"></script>



            <script>
        function postDummy(url) {
            var form = $('form#dummy-form')
            form.attr('action', url)
            form.submit()
        }
    </script>

        <script>
        function joinTrade(url) {
            Swal.fire({
                title: 'Invest Trade',
                input: 'number',
                inputPlaceholder: 'Amount',
                showCancelButton: true,
                confirmButtonText: 'Invest',
                showLoaderOnConfirm: true,
                preConfirm: (amount) => {
                    formdata = new FormData();
                    formdata.set('_token', 'BPg0t41eImsLqbdnv9UKFGb5CZMqc5rFzl5vChEB')
                    formdata.set('amount', amount)
                    let resStatus = 200;
                    return fetch(url,
                        {
                            method: "POST",
                            headers: {
                                'Accept': 'application/json'
                            },
                            body: formdata
                        })
                        .then(async response => {
                            resStatus = response.status
                            if (!response.ok) {
                                if (response.status === 422) {
                                    let message = await response.json();
                                    if (message.hasOwnProperty('errors')) {
                                        throw new Error(message.errors.amount[0])
                                    }
                                }
                                throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            console.log(error)
                            Swal.showValidationMessage(
                                `${error}`
                            )
                        })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.value) {
                    Swal.fire({
                            title: 'Successful!',
                            text: 'Trade invested successfully.',
                            type: 'success',
                            onClose: () => {
                                location.reload()
                            }
                        }
                    )
                }
            })
        }
    </script>






<script type="text/javascript" src="ujs/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#navbutton").click(function(){
                $("#mobilenav").slideToggle();

                // alert("yes");
            });



        });
    </script>


<script>
    function investone(){
        var invest_amount = document.forms['myform_1']['invest_amount'].value;
        var amountToEarn = invest_amount * 0.4;
        var result = document.getElementById("showval").innerHTML = "You will earn $" + amountToEarn + " daily for 5 days";
    }


    function seconinvest(){
        var invest_amount = document.forms['myform_1']['invest_amount'].value;
        var amountToEarn = invest_amount * 0.6;
        var result = document.getElementById("showval").innerHTML = "You will earn $" + amountToEarn + " daily for 14 days";
    }


    function thirdinvest(){
        var invest_amount = document.forms['myform_1']['invest_amount'].value;
        var amountToEarn = invest_amount * 0.8;
        var result = document.getElementById("showval").innerHTML = "You will earn $" + amountToEarn + " daily for 20 days";
    }

    function forthinvest(){
        var invest_amount = document.forms['myform_1']['invest_amount'].value;
        var amountToEarn = invest_amount * 0.10;
        var result = document.getElementById("showval").innerHTML = "You will earn $" + amountToEarn + " daily for 25 days";
    }


</script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60ce0f8a7f4b000ac0387855/1f8iepeaq';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<script src="../js/main.js"></script>

</body>
</html>