<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href=style.css rel=stylesheet>
    <title>Path traversal</title>
   
</head>

<body>
    <!-- <image src="/images/KFC-Logo.wine.png> -->
    <div>
        <section>
            <div class="container">
                <h1 style="text-align:center">*************************************************************************</h1>
                <h1 style="text-align:center"> ------------------------Path Traversal Vulnerable--------------------------- </h1>
                
                <section class="container-list-tiles">
                    <div>
                        <img src="/image.php?filename=7up.jpg">
                        <h3>Nước 7UP </h3>
                        $48.72
                        <a class="button" href="/product?productId=1">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=Cá-viên-chiên.jpg">
                        <h3>Cá viên chiên </h3>
                        $18.15
                        <a class="button" href="/product?productId=2">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=cach-lam-tra-dao-02.jpg">
                        <h3>Trà đào</h3>
                        $65.43
                        <a class="button" href="/product?productId=3">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=chicken.jpg">
                        <h3> Gà </h3>
                        $76.25
                        <a class="button" href="/product?productId=4">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=coca cola.jpg">
                        <h3>Coca </h3>
                        $42.24
                        <a class="button" href="/product?productId=5">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=Cơm-gà-viên.jpg">
                        <h3>Cơm gà viên</h3>

                        $86.98
                        <a class="button" href="/product?productId=6">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=com.jpg">
                        <h3>Cơm KFC </h3>

                        $69.33
                        <a class="button" href="/product?productId=7">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=combo_1.jpg">
                        <h3>Combo nhóm 1</h3>

                        $95.34
                        <a class="button" href="/product?productId=8">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=combo_3.jpg">
                        <h3>Combo nhóm 2</h3>

                        $55.93
                        <a class="button" href="/product?productId=9">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=combo_5.jpg">
                        <h3>Combo nhóm 3</h3>

                        $64.75
                        <a class="button" href="/product?productId=10">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=combo_29K.jpg">
                        <h3>Combo 29K</h3>

                        $26.75
                        <a class="button" href="/product?productId=11">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=combo_78K.jpg">
                        <h3>Pet Experience Days</h3>

                        $60.71
                        <a class="button" href="/product?productId=12">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=combo_99K.jpg">
                        <h3>Couple&apos;s Umbrella</h3>

                        $85.27
                        <a class="button" href="/product?productId=13">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=ga-viên.jpg">
                        <h3>Com-Tool</h3>

                        $39.64
                        <a class="button" href="/product?productId=14">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=hamburger.jpg">
                        <h3>Hexbug Battleground Tarantula Double Pack</h3>

                        $74.18
                        <a class="button" href="/product?productId=15">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=my_y.jpg">
                        <h3>Packaway Carport</h3>

                        $28.81
                        <a class="button" href="/product?productId=16">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=nuoc_suoi.jpg">
                        <h3>Babbage Web Spray</h3>

                        $88.85
                        <a class="button" href="/product?productId=17">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=pepsi.jpg">
                        <h3>Snow Delivered To Your Door</h3>

                        $68.22
                        <a class="button" href="/product?productId=18">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=phomaivien.jpg">
                        <h3>There is No &apos;I&apos; in Team</h3>

                        $64.73
                        <a class="button" href="/product?productId=19">View details</a>
                    </div>
                    <div>
                        <img src="/image.php?filename=potato_chips.jpg">
                        <h3>Roulette Drinking Game</h3>
                        $18.44
                        <a class="button" href="/product?productId=20">View details</a>
                    </div>
                </section>
            </div>
        </section>
        <div class="footer-wrapper">
        </div>
    </div>
    <!-- <script>
        document.addEventListener("keydown", function(event) {
            if (event.ctrlKey) {
                event.preventDefault();
            }
            if (event.keyCode == 123) {
                event.preventDefault();
            }
        });
        document.addEventListener('contextmenu',
            event => event.preventDefault()
        );
    </script> -->
</body>

</html>