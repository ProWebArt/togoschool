<?php
$auth = 0;
include(dirname(__FILE__).'/../../lib/includes_head.php');
?>
<article>
    <h1 class="titre">Equation-Inequation-Systeme</h1>
    <h2 class="sous_titre">A) Fonction polynôme du second degré dans R</h2>
    <h3>1)Definition:</h3><br/>
        On appelle fonction polinôme du second degré dans <img src="http://latex.codecogs.com/gif.latex?\mathbb{R}" title="" />,
        toute fonction: <br/>
        <img src="http://latex.codecogs.com/gif.latex?\\\mathbb{P}:\mathbb{R}&space;\mapsto&space;\mathbb{R}&space;\\" title="\\\mathbb{P}:\mathbb{R} \mapsto \mathbb{R} \\" /> / 
        <img src="http://latex.codecogs.com/gif.latex?\;&space;x&space;\mapsto&space;ax^{2}&plus;bx&plus;c\&space;avec\&space;a\in\mathbb{R}\textup{*},\&space;b\in\mathbb{R}\&space;et\&space;c\in\mathbb{R}" title="\; x \mapsto ax^{2}+bx+c\ avec\ a\in\mathbb{R}\textup{*},\ b\in\mathbb{R}\ et\ c\in\mathbb{R}" />
    <h3>2)Forme canonique:</h3><br/>
    <p>Soit <img src="http://latex.codecogs.com/gif.latex?\colon\&space;P(x)&space;=&space;ax^{2}&plus;bx&plus;c\&space;avec\&space;a\in\mathbb{R}\textup{*}" title="P(x) = ax^{2}+bx+c\ avec\ a\in\mathbb{R}\textup{*}" /></p>
    <p><img src="http://latex.codecogs.com/gif.latex?\forall&space;x\in\mathbb{R},\&space;P(x)=a(x^{2}&plus;\frac{b}{a}x&plus;\frac{c}{a})" title="\forall x\in\mathbb{R},\ P(x)=a(x^{2}+\frac{b}{a}x+\frac{c}{a})" /></p>
    <p><img src="http://latex.codecogs.com/gif.latex?P(x)=a[(x&space;&plus;&space;\frac{b}{2a})^{2}&space;-&space;(\frac{b^{2}&space;-&space;4ac}{4a^{2}})]" title="P(x)=a[(x + \frac{b}{2a})^{2} - (\frac{b^{2} - 4ac}{4a^{2}})]" /></p>
    <p>
    <img src="http://latex.codecogs.com/gif.latex?Posons\&space;\Delta&space;=&space;b^{2}&space;-&space;4ac" 
    title="" />
    </p>
    <p>
    <img src="http://latex.codecogs.com/gif.latex?\mathbf{Delta\&space;est\&space;appelle'\&space;discriminant\&space;de\&space;la\&space;fonction\&space;polinome\&space;du\&space;second\&space;degre\&space;de\&space;p(x)}" title="\mathbf{Delta\ est\ appel\ le\ discriminant\ de\ la\ fonction\ polinome\ du\ second\ degre\ de\ p(x)}" />
    </p><br/>
    <h4>a)Cas générale:</h4>
    <p>Soit: <img src="http://latex.codecogs.com/gif.latex?P(x)&space;=&space;ax^{2}&space;&plus;&space;bx&space;&plus;&space;c" title="P(x) = ax^{2} + bx + c" />&nbsp;&nbsp;avec&nbsp;&nbsp;
        <img src="http://latex.codecogs.com/gif.latex?a&space;\neq&space;0" title="a \neq 0" /></p>
    <p><img src="http://latex.codecogs.com/gif.latex?\forall&space;x&space;\in&space;\mathbb{R},\&space;P(x)&space;=&space;a[(x&space;&plus;&space;\frac{b}{2a})^{2}&space;-&space;\frac{b^{2}&space;-&space;4ac}{4a^{2}}]" title="\forall x \in \mathbb{R},\ P(x) = a[(x + \frac{b}{2a})^{2} - \frac{b^{2} - 4ac}{4a^{2}}]" /></p>
        <p><img src="http://latex.codecogs.com/gif.latex?P(x)&space;=&space;a[(x&space;&plus;&space;\frac{b}{2a})^{2}&space;-&space;\frac{\Delta}{4a^{2}}]" title="P(x) = a[(x + \frac{b}{2a})^{2} - \frac{\Delta}{4a^{2}}]" /></p>
        <p><img src="http://latex.codecogs.com/gif.latex?\frac{\Delta}{4a^{2}}\&space;a\&space;meme\&space;signe\&space;que\&space;\Delta\&space;car\&space;4a^{2}&space;>&space;0" title="\mathbf{\frac{\Delta}{4a^{2}}\ a\ meme\ signe\ que\ \Delta\ car\ 4a^{2} > 0}" /></p>
        <p>On distingue trois cas possible :</p><br/>
        <p><img src="http://latex.codecogs.com/gif.latex?\mathbf{{\color{Red}&space;1^{er}&space;cas&space;:\&space;}&space;Si\&space;\Delta&space;<&space;0\&space;Alors}" title="\mathbf{{\color{Red} 1^{er} cas :\ } Si\ \Delta < 0\ Alors}" /></p>
        <p><img src="http://latex.codecogs.com/gif.latex?*\&space;P(x)" title="*\ P(x)" />&nbsp; n'est pas factorisable</p>
        <p><img src="http://latex.codecogs.com/gif.latex?*\&space;P(x)" title="*\ P(x)" />&nbsp; ne possède pas de zéro ou de racine</p>
        <p><img src="http://latex.codecogs.com/gif.latex?*\&space;\forall&space;x&space;\in&space;\mathbb{R},\&space;P(x)" title="*\ \forall x \in \mathbb{R},\ P(x)" /> a meme signe que "a"</p><br/>
        <p><img src="http://latex.codecogs.com/gif.latex?\mathbf{{\color{Red}&space;2^{eme}\&space;cas:\&space;}&space;Si\&space;\Delta&space;=&space;0\&space;Alors}" title="\mathbf{{\color{Red} 2^{eme}\ cas:\ } Si\ \Delta = 0\ Alors}" /></p>
        <p><img src="http://latex.codecogs.com/gif.latex?*\&space;\forall&space;x\&space;\in&space;\mathbb{R},\&space;P(x)&space;=&space;a(x&space;&plus;&space;\frac{b}{2a})^{2}" title="*\ \forall x\ \in \mathbb{R},\ P(x) = a(x + \frac{b}{2a})^{2}" /></p>
        <p><img src="http://latex.codecogs.com/gif.latex?*\&space;P(x)" title="*\ P(x)" />&nbsppossède une racine double <img src="http://latex.codecogs.com/gif.latex?x_{0}&space;=&space;-\frac{b}{2a}" title="x_{0} = -\frac{b}{2a}" /></p>
        <p><img src="http://latex.codecogs.com/gif.latex?*\&space;\forall&space;x\&space;\in&space;\mathbb{R}&space;-&space;\{-\frac{b}{2a}\},\&space;P(x)" title="*\ \forall x\ \in \mathbb{R} - \{-\frac{b}{2a}\},\ P(x)" />&nbsp;a meme signe que "a"</p><br/>
        <p><img src="http://latex.codecogs.com/gif.latex?\mathbf{{\color{Red}&space;3^{eme}\&space;cas&space;:\&space;}&space;Si\&space;\Delta&space;>&space;0\&space;Alors:}" title="\mathbf{{\color{Red} 3^{eme}\ cas :\ } Si\ \Delta > 0\ Alors:}" /></p>
        <p><img src="http://latex.codecogs.com/gif.latex?*\&space;P(x)" title="*\ P(x)" />&nbsp; admet deux racines distinctes</p>
        <p>1)&nbsp;<img src="http://latex.codecogs.com/gif.latex?x_{1}=\frac{-b-\sqrt{A}}{2a}" title="x_{1}=\frac{-b-\sqrt{A}}{2a}" />&nbsp; et&nbsp; 2)&nbsp;<img src="http://latex.codecogs.com/gif.latex?x_{1}=\frac{-b&plus;\sqrt{A}}{2a}" title="x_{1}=\frac{-b+\sqrt{A}}{2a}" /></p>
        <p><img src="http://latex.codecogs.com/gif.latex?*\&space;\forall&space;x&space;\in&space;\mathbb{R},\&space;P(x)&space;=&space;a(x&space;-&space;x1)(x&space;-&space;x2)" title="*\ \forall x \in \mathbb{R},\ P(x) = a(x - x1)(x - x2)" /></p>
        <br/><p>b)Signe de P(x)</p>
        <p>Supposons <img src="http://latex.codecogs.com/gif.latex?x_{1}&space;<&space;x_{2}" title="x_{1} < x_{2}" /></p>
        <p><img src="/coursenligne/cours/img/tableau_de_signe2.gif"></p>
        <p>On dira que P(x) a le même signe que "a" à l'exterieur des racines et le signe contraire de "a" à l'interieur des racines. </p>
        <p><h2 class="sous_titre">B)Equations du second degré dans R</h2></p>
        <p><h3>1)Définition</h3></p>
<p>
    On appelle équation du second degré dans <?= setImageCour("ensemble_r.gif"); ?>,
    toute égalité de la forme <img src="http://latex.codecogs.com/gif.latex?P(x)&space;=&space;0" title="P(x) = 0" /> où p est une
    fonction polynôme du second degré.
</p>
<p><h3 class="remarque">Remarque</h3>
Résoudre une telle équation revient à déterminer les racines de P(x).
</p>
<p><h3>2)Exemples</h3></p>
<p>Résoudre dans <img src="http://latex.codecogs.com/gif.latex?\mathbb{R}" title="\mathbb{R}" /> les équations suivantes:</p>
<p><img src="http://latex.codecogs.com/gif.latex?a)\&space;x^{2}-x&plus;1=0\&space;\&space;\&space;\&space;\&space;\&space;\&space;\&space;\&space;b)\&space;4x^{2}-3x-1=0\&space;\&space;\&space;\&space;\&space;\&space;\&space;\&space;\&space;c)\&space;x^{2}&space;&plus;&space;2\sqrt{2}x&space;&plus;&space;2&space;=&space;0" title="a)\ x^{2}-x+1=0\ \ \ \ \ \ \ \ \ b)\ 4x^{2}-3x-1=0\ \ \ \ \ \ \ \ \ c)\ x^{2} + 2\sqrt{2}x + 2 = 0" /></p>
<p><h3>3)Résolutions</h3></p>
<p><img src="/coursenligne/cours/img/rea.gif" ></p><br/>
<p><img src="/coursenligne/cours/img/reb.gif"></p><br/>
<p><img src="/coursenligne/cours/img/rec.gif"></p><br/>
<p><h2 class="sous_titre">C)Inéquations du second degré dans R</h2></p>
<p><h3>1)Definition</h3></p>
    &nbsp;&nbsp;P étant une fonction polynôme du second degre, on appelle inéquation du second degre dans <img src="/coursenligne/cours/img/ensemble_r.gif">,
    l'une des inégalités du type <img src="/coursenligne/cours/img/ineq_def.gif"/>
<p><h3 class="remarque">Remarque</h3></p>
<p>Résoudre une inéquation du second degré revient à étudier le signe d'une fonction polynôme du second degré</p>
<p><h3>2)Exemples</h3></p>
<p>Résoudre dans <img src="/coursenligne/cours/img/ensemble_n.gif"> les inéquations suivantes:</p>
<p><?= setImageCour("exineq.gif"); ?></p>
<p><h3>Résolution</h3></p>
<p><?= setImageCour("ria.gif"); ?></p>
<p>tableau de signe</p>
<p><?= setImageCour("sia.gif"); ?></p><br/>
<p><?= setImageCour("rib.gif"); ?></p><br/>
<p><?= setImageCour("ric.gif") ?></p>
<p>tableau de signe</p>
<p><?= setImageCour("sic.gif"); ?></p>
<p><h3>Remarques</h3></p>
<p>Soit l'équation: <?= setImageCour("exr.gif")?>.</p>
<p>*Si a et c sont de signes contraires alors l'équation admet deux solutions distincts.</p>
<p>*S'il existe b' tel que b=2b', on calcule plutôt Δ'.</p>
<p> Δ' est appelé le <strong style="color: red">discriminant réduit</strong> et <?= setImageCour("d_p.gif"); ?></p>
<p>* Dans le cas où Δ'>0, l'équation admet deux solutions distinctes</p>
<p><?=setImageCour("x12.gif"); ?></p><br/><br/>
<p>A suivre...</p>
<p><?php include dirname(__FILE__).'/../../lib/comment_bloc.php'; ?></p>
<p></p>
<p></p>
<p></p>
<p></p>
</article>
<?php include(dirname(__FILE__).'/../../lib/includes_foot.php'); ?>