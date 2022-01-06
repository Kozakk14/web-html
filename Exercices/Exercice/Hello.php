<h1>Du HTML</h1>
<p>
<h2> Accès aux message prédéfinis</h2>
<a href="?message=Petit message&size=5">Petit</a><br>
<a href="?message=Autre message plus long&size=22">Long</a><br>
<a href="?message=bloppppppppppppppppppppppppppppppppppppppp&size=63">Blop</a><br>

<?php
extract($_GET);
$message??="Aucun message pour le moment";
for($i=1;$i<$size;$i++){
echo "<p style='font-size:$i'>$message!</p>";
}
?>
</p>

<p style="font-size:<?=$i?>"><?=$message?></p>
<?php
echo date('D d M Y');
?>