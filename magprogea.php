<!DOCTYPE html>
<html>
<head>
	<title>Magprog</title>
</head>
<body>
	<h1> I. tétel </h1>
	<pre>
		Néhány értékadó operátor:
		x = y: x értékét y értékére állítjuk
		x++: növelés, ekvivalens ezzel: x=x+1
		x--: csökkentés, ekvivalens ezzel: x=x-1
		3 fajta operátor C#-ban:
			unáris: 1 operandus pl: +x, –x ,!x x++,x--
			bináris: 2 operandus pl: x+y, x*y, x << y
			ternáris: 3 operandus pl: felt ? kif1 : kif2

		Adatokon (változó, konstans, literál) műveletvégzés.
		Egyelőre néhány fontosabb operátor:
		x + y: összeadás
		x - y: kivonás
		x * y: szorzás
		x / y: osztás
		x % y: maradék vagy modulo

		értékadók: 
			x+=y: ekvivalens ezzel: x=x+y
			x-=y  x*=y  x/=y  x%=y
			x<<=y  x>>=y
			x&=y  x|=y  x^=y





		Az összes szabály:
			x és y típusa azonos => eredmény típusa ez
			eredmény min. 4-bájtos típusú (int vagy uint)
			x egész, y valós => eredmény valós
			eredmény típusa a „nagyobb”
			x típusának és y típusának a mérete azonos, de x előjeles és y előjel nélküli => eredmény előjeles és "eggyel" nagyobb
		</pre>

	<div id="pageturning">
		<!--<a href="?P=Magprogea1">Előző </a> !-->
		<a href="?P=Magprogea1"> 1 </a>
		<a href="?P=Magprogea2"> 2 </a>
		<a href="?P=Magprogea2"> Következő</a>
	</div>
</body>
</html>