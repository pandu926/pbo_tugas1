<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>menghitung luas dan keliling bangun geometri</title>


    <style>
#persegii, #pp, #jg,#sgta, #ly {
  display:none;
  position: relative;
  top: 30px;
}

#persegii h1, #pp h1,#jg h1,#sgta h1,#ly h1 {
  left: 40%;
  right: 30%;
  position: relative;
}
    </style>
</head>
<body>
    <h1>kalkulator bangun geometri</h1>
   <button id="persegi" onclick="persegi()">persegi</button>
   <button id="persegipanjang" onclick="pp()">persegi panjang</button>
   <button id="jajar" onclick="jajar()">jajar genjang</button>
   <button id="segi" onclick="segitiga()">segitiga</button>
   <button id="layang" onclick="layang()">layang-layang</button>
    
    <div id="persegii">

        <h1>PERSEGI</h1>
        <form action="hasil.php" method="post">
        <label for="panjang">masukkan panjang</label>
        <input type="text" name="panjang">
        <br/>
        <button type="submit" name="hitung" value="persegi">submit</button>
        </form>
    </div>

    <div id="pp">
        <h1>PERSEGI PANJANG</h1>
        <form action="hasil.php" method="post">
        <label for="panjang">masukkan panjang</label>
        <input type="text" name="panjang">
        <br/>
        <label for="lebar">masukkan lebar</label>
        <input type="text" name="lebar">
        <br/>
        <button type="submit" name="hitung" value="pPanjang">submit</button>
        </form>
    </div>
    <div id="jg">
        <h1>jajar genjang</h1>
        <form action="hasil.php" method="post">
        <label for="alas">masukkan alas</label>
        <input type="text" name="alas">
        <br/>
        <label for="tinggi">masukkan tinggi</label>
        <input type="text" name="tinggi">
        <br/>
        <label for="samping">masukkan sisi samping</label>
        <input type="text" name="samping">
        <br/>
        <label for="bawah">masukkan sisi bawah</label>
        <input type="text" name="bawah">
        <br/>
        <button type="submit" name="hitung" value="jajar">submit</button>
        </form>
    </div>
    <div id="sgta">
        <h1>segitiga siku siku</h1>
        <form action="hasil.php" method="post">
        <label for="alas">masukkan alas</label>
        <input type="text" name="alas">
        <br/>
        <label for="tinggi">masukkan tinggi</label>
        <input type="text" name="tinggi">
        <br/>
        <label for="samping">masukkan sisi samping</label>
        <input type="text" name="samping">
        <br/>
        <button type="submit" name="hitung" value="segitiga">submit</button>
        </form>
    </div>
    <div id="ly">
        <h1>layang layang</h1>
        <form action="hasil.php" method="post">
        <label for="d1">masukkan diagonal 1</label>
        <input type="text" name="diagonal1">
        <br/>
        <label for="d2">masukkan diagonal 2</label>
        <input type="text" name="diagonal2">
        <br/>
        <label for="s1">masukkan sisi 1</label>
        <input type="text" name="sisi1">
        <br/>
        <label for="s2">masukkan sisi 1</label>
        <input type="text" name="sisi2">
        <br/>
        <label for="s3">masukkan sisi 1</label>
        <input type="text" name="sisi3">
        <br/>
        <label for="s4">masukkan sisi 1</label>
        <input type="text" name="sisi4">
        <br/>
        <button type="submit" name="hitung" value="layang">submit</button>
        </form>
    </div>
    
    <script>
        const persegi = () => {
            const x = document.getElementById("persegii");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        const pp = () => {
            const x = document.getElementById("pp");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        const jajar = () => {
            const x = document.getElementById("jg");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        const segitiga = () => {
            const x = document.getElementById("sgta");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        const layang = () => {
            const x = document.getElementById("ly");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }



    </script>

</body>
</html>