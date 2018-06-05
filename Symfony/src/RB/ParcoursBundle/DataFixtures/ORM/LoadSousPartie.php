 <?php 
//Remplissage de la table SousPartie avec les assets


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\ReferenceRepository;
use RB\ParcoursBundle\Entity\SousPartie;

class LoadSousPartie 
extends AbstractFixture 
implements OrderedFixtureInterface
{
    //Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {

    $periode1 = $this->getReference('periode1');
    $periode2 = $this->getReference('periode2');
    $periode3 = $this->getReference('periode3');
    $periode4 = $this->getReference('periode4');
    $periode5 = $this->getReference('periode5');
    $periode6 = $this->getReference('periode6');



    $sousPartie1 = new SousPartie();
    $sousPartie1->setTitre(null);
    $sousPartie1->setDescription('Les premières oeuvres sont des huiles sur toile de 15 à 30 points. Inspirées d’abord par des personnages, des paysages, des natures mortes réels. La paysanne est une parente. Les Pêcheurs grecs ont été composés d’après une photographie. Dix ans séparent ces œuvres et l’on constate l’évolution qui va du figuratif et de la ressemblance à l’effort de structuration originale. Cette tendance s’accentue lorsque je prends le parti d’imaginer les objets, sans référence obligée. Ainsi, dans la Nature morte à la veilleuse, seul l’objet de faïence blanche existait, les autres éléments (compotier, carafe, raisin) sont inventés pour la composition Le Violon est peint sans modèle et sans souci de vraisemblance : fausse perspective, transparence du boîtier, feuillage décoratif dont le motif réitéré et appliqué à l’objet lui-même semble envahir la surface. Les Baigneuses d’Eqfa surgissent du souvenir de la visite au bain pour femmes aux sources de la palmeraie de Palmyre, aucun croquis n’ayant été réalisé sur place, les baigneuses d’ailleurs sont totalement imaginaires, dans leur plastique comme dans les couleurs, le jeu des reflets de l’eau sous la voûte et sur les corps est certainement le motif principal du tableau. 
      Ainsi dès les premières toiles, on constate que le jeu des couleurs s’impose aux formes, et que le fond petit à petit va prendre presque autant d’importance que les objets, d’où un certain flou des contours : une osmose s’installe entre les objets et le fond, le traitement de la surface l’emporte avec la composition, la répartition des couleurs. Fonds marins, parti du dessin d’un coquillage réel, devient prétexte à l’enchevêtrement des coulées fluides, dont on ne sait si ce sont des algues, des rochers, des sables, et le motif de départ est littéralement absorbé par le plaisir de la composition, de la couleur et du geste. 
      La scène du Battage du blé vient d’un voyage au Liban, scène entrevue au cours d’une excursion et retracée avec le souvenir d’un décor de collines et de village aux maisons cubiques ; s’y ajoutent les formes naïves des figurines de terre cuite exposées dans les vitrines du musée d’archéologie de Beyrouth ; je voulais retrouver dans le tableau le rayonnement du soleil nimbant la scène, en faisant l’unité, en volutes et spirales de lumière ; j’y rencontrais aussi mon penchant pour l’archéologie. On comprendra mieux les Silhouettes (Guerriers ou Prêtres?) qui me viennent d’un série de figurines plates en bronze patiné d’or et de vert, de roux et de bleuté, installées dans une vitrine de ce même musée ; ce sont plutôt les ombres ou les doubles de ces personnages qui dansent dans le soleil.'
);
    $sousPartie1->setPeriode($periode1);
    $sousPartie1->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie1' , $sousPartie1);
    $manager->persist($sousPartie1);


    $sousPartie2 = new SousPartie();
    $sousPartie2->setTitre(null);
    $sousPartie2->setDescription('Les dernières toiles de la période précédente montrent l’importance de la structuration au détriment de la reconnaissance des objets. Cette tendance aboutit à des œuvres élaborées pour le plaisir du jeu des formes, qu’elles soient courbes ou plus rigides, plans de sites, de villes, de structures de la matière. Le lien avec le monde n’est pas rompu, il reste essentiellement source d’une active rêverie : on voudrait exprimer une certaine émotion qui peut être aussi le bonheur de saisir l’unité cachée dans chaque spectacle et apparence du monde extérieur. Par conséquent la couleur et la composition l’emportent sur les contours, sur la reconnaissance de l’objet : Scènes ressaisies hors de leur contexte, filtrées par la mémoire et dans lesquelles je suis entrée jusqu’à l’imprégnation, comme La forêt (impression fugitive) ou Les Eaux souterraines (lent travail de l’imagination) qui représentent une réalité hydrologique des Causses natifs. Certains objets restent discernables quoique recomposés en des formes mythiques comme dans Chevalerie, Amazone ou Histoire de l’arbre-oiseau. Dans leur grande majorité les oeuvres inventent des associations et des structures qui expriment une émotion en dehors de toute anecdote : La Joie, Brasier. L’Allégorie de la femme-frégate marque une évolution vers la décoration : bien sûr la superposition métaphorique des visages et des vaisseaux appartient à la recherche des formes mythiques, mais le dessin est plus systématique et introduit la série (sans titre) des encres sur papier où les formes seules subsistent sur un fond blanc non travaillé. Nous sommes presque dans la froideur d’une recherche logographique et publicitaire, une mosaïque d’éléments. La série des Totems qui succède à cette période conservent le souci de la forme et suggèrent l’acuité d’un regard performant comme un microscope au service de l’imaginaire. Ces puzzles imbriqués retrouvent les évocations d’un monde sensible : Bois et sous-bois ou Améthystes qui est inspiré par les “ jardins d’améthyste ” de Mallarmé (Hérodiade). Une série de petites gouaches et encres conserve une sensualité grâce au support rugueux du papier d’Arches, et donne à ces travaux où s’exerce la main dans des gestes rapides, une tonalité musicale joyeuse et dansante. Peu à peu les contours se font plus poreux, l’imbrication cède à l’osmose qui s’installe entre fonds et formes jusqu’à la presque disparition de celles-ci : huiles sur toile Sans Titre.'
);
    $sousPartie2->setPeriode($periode2);
    $sousPartie2->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie2' , $sousPartie2);
    $manager->persist($sousPartie2);


    $sousPartie3 = new SousPartie();
    $sousPartie3->setTitre('1- Les écritures, grattages, traçages');
    $sousPartie3->setDescription('Peu à peu s’installe la sensation que le cerveau mène une vie parallèle, qu’il impose à notre existence ses visions au moins aussi importantes que celles du monde perceptible : les “ traçages ” de la mémoire l’emportent sur les formes visibles. Cela donne des oeuvres qui s’inspirent de l’histoire des écritures : beauté des caractères venus d’écritures non alphabétiques ou des grottes rupestres, ce qui nous conduit au plaisir du grattage et à l’utilisation des poudres colorées, épices ou terres des carrières. La libération des traces mnémoniques à travers la liberté du geste ouvre une nouvelle voie. La main et l’esprit s’étant rejoints, je m’attaque avec plus de confiance à des toiles ou je voudrais faire “ parler sans mots ” la couleur et les épaisseurs, le grattage comme un réseau de formes non-identifiables. “ Traces ” des engrammations neuroniques hors langages et propres à l’imagination? Mais aussi recherche de signes qui seraient comme archéologies du futur : traces de messages dont les empreintes ne sont pas identifiables. Avec les “ traçages ”, la main apprend à se dissocier de la pensée construite et des mots. 
      Pour répondre à des traçages de la pensée visuelle (différemment de l’automatisme surréaliste), j’ai espéré une maîtrise dans l’association du geste et des circuits aléatoires, comme le reflet visuel des flux de l’imagination. Une plongée en quelque sorte dans la “ boîte noire ” de l’intelligence humaine (non artificielle, non programmée). Je découvrais une pensée sensible, éclairée de quelques bribes verbales mais surtout illuminée par le plaisir de faire, très proche peut-être de celui de l’enfant qui s’émerveille d’être cause. Je découvrais une pensée concrète proche de la matière. 
      Nous ne devons donc pas voir des oeuvres “ abstraites ” dans ces tableaux dessinés avec des poudres de terre, mais au contraire des oeuvres qui recherchent le plaisir originel de “ faire ”. La matière vient de carrières, de terres broyées, de roches colorées, parfois d’épices. Bien sûr, le rappel des dessins rupestres du Quercy est omniprésent, comme si les grandes forces Cette nostalgiques du pays natal se trouvaient quelque part inscrites dans la mémoire. 
      Terres et encres sont mêlées. Tandis que les terres sont la chair des oeuvres, les encres dessinent des tracés qui rappellent des signes iconiques, comme une recherche calligraphique.'

);
    $sousPartie3->setPeriode($periode3);
    $sousPartie3->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie3' , $sousPartie3);
    $manager->persist($sousPartie3);    



    $sousPartie4 = new SousPartie();
    $sousPartie4->setTitre('2- Les encres');
    $sousPartie4->setDescription('Dans cette volonté de libération, la main devient pensante, allégée de matière par le choix des encres qui prennent de plus en plus d’importance, mais ne sont pas au service des mots. Le dessin est le résultat inattendu d’une élaboration intérieure inconsciente qui suscite un geste, et le choix des couleurs. Le pinceau se fait léger, c’est la main qui parle et c’est l’esprit dans ce geste. Comme le peintre chinois qui regarde le fruit intensément jusqu’à atteindre l’esprit du fruit. Ce seront d’abord des “ calligraphies ” à l’encre de Chine, qui cependant ne cherchent à signifier dans aucun système : tout plagiat des écritures fonctionnelles est écarté et enfin il n’y a aucune prétention à imiter l’Orient. Il s’agirait plutôt de “ tracés ” affirmant au moyen d’un matériau simple et riche de possibilités plastiques (jeu des nuances et des graphies), le « chant des signes », berçant des rêveries mouvantes. Tout est dans le plaisir du geste et le non-dit, comme si petit à petit se dégageait l’évidence d’une vie sensible hors des mots. Ma familiarisation avec le travail des encres m’a permis de donner une dimension mythique aux représentations schématiques. Par exemple Ténochtitlan est inspiré par la maquette de l’ancienne ville des Aztèques, le quadrillage des canaux ponctués par l’or des temples, mais c’est aussi un animal monstrueux. Je découvrais la dimension « métaphorique » de l’expression iconique. L’inspiration venait d’un voyage au Mexique (La Guerre fleurie, Le Jeu de pelote, Masque) a opéré de façon totalement inconsciente puisque le titre de ces œuvres ne m’est venu qu’après leur exécution. Les titres d’ailleurs ne me satisfont pas, ils réduisent l’interprétation alors que je tiens à conserver le jeu des métaphores : par exemple, Masque est habité par une dimension musicale et par d’autres visions. Echarpe suggère bien autre chose que son titre : villes, vaisseaux, réseaux, événements cosmiques et biologiques.'
);
    $sousPartie4->setPeriode($periode3);
    $sousPartie4->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie4' , $sousPartie4);
    $manager->persist($sousPartie4);



    $sousPartie5 = new SousPartie();
    $sousPartie5->setTitre('3- Mimogrammes');
    $sousPartie5->setDescription('Dans de petits carnets, des calligraphies schématiques au pinceau léger et à la plume, comme des notations rapides, écritures ou mimogrammes sans références, totalement libres de signification, doués d’une vie autonome au gré du regard qu’on leur porte. Chaque œuvre est polysémique ; l’interprétation sensible n’est pas figée et reste intraduisible. D’où la recherche de signes plus schématiques, comme des idéogrammes « maigres », qui renouent avec la plume ou le feutre, calligraphies occidentales.'
);
    $sousPartie5->setPeriode($periode3);
    $sousPartie5->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie5' , $sousPartie5);
    $manager->persist($sousPartie5);



    $sousPartie6 = new SousPartie();
    $sousPartie6->setTitre('1- Les poèmes-affiches décorés avec des encres');
    $sousPartie6->setDescription('Donc, entrer dans l’âme du poème pour en extraire l’enchantement à poser sur la feuille, du bout de la main, du bout du pinceau. Avec les “ poèmes décorés ” sur des textes de René Plantier, nous avons choisi l’immatérialité de l’esprit qui joue entre les mots et les encres. Les calligraphies expriment une synthèse émotionnelle surgie du poème : aucune forme ne peut suggérer aucun mot. Le dessin exprime la force des mots en dehors de leur sens littéral, il visualise un moment poétique aléatoire et subjectif. Le signe calligraphié est proche d’une plénitude de l’esprit car il répond à un écho personnel que le poème suscite : le plaisir de saisir un flash de la pensée visuelle. Poèmes décorés, et non pas illustrés, pour dire que l’attitude de l’artiste en face du poème, est telles qu’en face d’un spectacle de la nature : il ne s’agit pas de reproduire un ensemble ou une partie du spectacle, mais de s’en imprégner, d’en extraire la « moelle ». Cela peut s’exprimer soudainement ou être remis à plus tard, mais toujours il faut que le travail de l’inconscient se fasse dans le riche terreau de l’imagination sensible. Alors un geste surgit comme dans une expiration rapide et sûre d’elle-même. D’autres auteurs, des citations fécondantes et mes propres poèmes, j’ai pu les « relire » sous la puissance du geste ; cela m’a permis d’en découvrir des sens nouveaux.'
);
    $sousPartie6->setPeriode($periode4);
    $sousPartie6->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie6' , $sousPartie6);
    $manager->persist($sousPartie6);

 



    $sousPartie7 = new SousPartie();
    $sousPartie7->setTitre('2- Les pastels décorés avec des poèmes');
    $sousPartie7->setDescription('Les papiers spéciaux utilisés par les pastellistes ne me conviennent pas : la rencontre du pastel avec le papier Vergé (moulins Richard le Bas) comme support, fut donc un hasard qui permit l’expression d’un désir latent tout à fait indéfinissable. Il faut, pour que la rencontre ait lieu, une disponibilité pour la saisir et s’y arrêter. Le grain du papier, sa texture, et la qualité du pastel sec et tendre, permettent des effets de surface et de profondeur. Les questions posées par les visiteurs de l’exposition des seuls pastels, à la galerie Confluences, m’ont inspiré des réponses en forme de poèmes. Au lieu réduire l’œuvre dessinée à un commentaire, donc à du verbal codé, j’ai eu l’idée de répondre au mystère par un autre mystère, les deux ayant la poésie en commun.'
);
    $sousPartie7->setPeriode($periode4);
    $sousPartie7->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie7' , $sousPartie7);
    $manager->persist($sousPartie7);



    $sousPartie8 = new SousPartie();
    $sousPartie8->setTitre('3- Livre d’artiste');
    $sousPartie8->setDescription('Illustrations de citations sélectionnées de mes écrits, poésie ou prose poétique'
);
    $sousPartie8->setPeriode($periode4);
    $sousPartie8->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie8' , $sousPartie8);
    $manager->persist($sousPartie8);



    $sousPartie9 = new SousPartie();
    $sousPartie9->setTitre('4- Pastels-haïkus');
    $sousPartie9->setDescription('Dans le siècle des écritures virtuelles, j’ai aimé travailler avec des poudres de roches. Ensuite, les pastels ont permis ce contact direct.'
);
    $sousPartie9->setPeriode($periode4);
    $sousPartie9->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie9' , $sousPartie9);
    $manager->persist($sousPartie9);    




    $sousPartie10 = new SousPartie();
    $sousPartie10->setTitre('1- Les plans détournés');
    $sousPartie10->setDescription('Ma fascination pour le schématisme vient-elle d’une vocation rentrée d’architecte ou d’urbaniste ? Sans doute la création est-elle soutenue par un terreau de nostalgies. Dès les années 75 certains tableaux présentaient des formes emboîtées, des plans, des jeux de construction (marinas, villes fabuleuses..) dont l’aspect formel et figé m’avait conduite à une impasse. Plus tard, je me suis amusée à détourner de leur fonction des plans d’ingénieur, un support fragile dont on remarque les pliures, les légendes et les cotes : cette démarche remplaçait par la fantaisie et les discours drolatiques, les traductions codées des schémas scientifiques. Supports d’un message rigoureux réduit à la maigreur de l’énoncé, je leur substitue des formes intuitives, monstres ou poupées désarticulées. Les formes scientifiques sont vouées à un codage et donc à une transcription verbale précise visant à l’information et à la communication efficace. Dans ces squelettes, la main pensante projette des traces où l’on détecte des fantasmes robotiques ayant des connivences avec la chair, nerfs et muscles. Superposition de la technique, des sciences naturelles et des images de l’archéologie. Robots ? Usines biologiques ? Masques d’insectes ? Totems primitifs ? Le travail sur le dialogue entre la peinture et la poésie (voir chapitre précédent) nous affranchit d’un support préétabli et même des titres, des interprétations données. Je dessine et peins sans avoir de projet énonçable. La main pensante se fait plus intuitive, les formes sont l’expression de cette libération par rapport au langage. Les formes deviennent en elles-mêmes poétiques, se prêtant à l’ultime émergence de métaphores dans lesquelles la matière et en particulier le support vont jouer un rôle expressif.'
);
    $sousPartie10->setPeriode($periode5);
    $sousPartie10->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie10' , $sousPartie10);
    $manager->persist($sousPartie10);    


    $sousPartie11 = new SousPartie();
    $sousPartie11->setTitre('2- Les Kakémonos');
    $sousPartie11->setDescription('Encore le hasard inspiré ! Un morceau de papier blanc « à peindre » légèrement gaufré traîne dans mon carton à dessins : cela doit faire trois ans que j’y ai gribouillé une sorte de profil félin c’est tout du moins ce que je vois « après » l’avoir dessiné. Donc je retrouve ce morceau de quelque chose, et je découvre les effets du grain que je n’avais pas remarqué, ainsi le moment est venu d’une certaine maturité, je suis « à point » pour entreprendre. Le format se révèle plein de questionnements : où faudra-t-il couper le rouleau ? Quelle doit être l’importance des motifs ? Tout cela est en fait guidé par les contraintes matérielles : la largeur de la table à dessin par exemple, la hauteur sous plafond de la galerie…etc Un motif apparaît, auquel je n’avais pas pensé : racontent-ils des histoires ? Ont-ils un lien entre eux ? Le fond doit être retravaillé en général, peut-être pour éviter un rappel de papier peint mural. Les œuvres sont fragiles, périssables. Au moment où les artistes des galeries donnent dans le monumental, dans les technologies ruineuses, je ne sais comment me situer : c’est un art pauvre et périssable, qui ne vaut que par le plaisir ludique de son exécution, et par les images « de synthèse » qui me viennent de toutes les images et toutes sortes de sensations imprécises et de tout un savoir, mon stock personnel qui vient à la surface, une sorte de mémoire intuitive et sensorielle.'
);
    $sousPartie11->setPeriode($periode5);
    $sousPartie11->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie11' , $sousPartie11);
    $manager->persist($sousPartie11);



    $sousPartie12 = new SousPartie();
    $sousPartie12->setTitre('3- Collages');
    $sousPartie12->setDescription('Dans la suite des dialogues peinture-poésie, les formes acquièrent en elles-mêmes une suggestivité poétique. Le travail sur les formes, sans contenu préalablement donné, vient appuyer cet objectif, en particulier les découpages, collages.'
);
    $sousPartie12->setPeriode($periode5);
    $sousPartie12->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie12' , $sousPartie12);
    $manager->persist($sousPartie12);





    $sousPartie13 = new SousPartie();
    $sousPartie13->setTitre('1- Ossatures et radiographies');
    $sousPartie13->setDescription('Parfois, l’imaginaire conserve des traces d’une rencontre avec la réalité dont nous recherchons l’ossature, la structure interne : un objet, un paysage urbain (Usines dans le matin), un événement (Les Pink Floyd, Le Football). L’ossature n’est pas un schéma,elle n’a rien de mesuré : c’est la sensation de l’essentiel non visible, un peu comme le support en fils de fer qui porte la chair de la sculpture. Cette période de création a certainement été inconsciemment influencée par une interrogation sur les écritures non-verbales ; traçages, projection des formes mouvantes qui peuplent l’imagination, comme un coup de sonde aléatoire dans l’inconnu de la pensée visuelle: une pensée sans langage! Ainsi se confirme ce que j’ai pressenti et ensuite essayé de démontrer : “ l’art n’est pas un langage ”, puisque sa particularité est d’échapper aux codes, aux modes de production. Point de vue se démarquant de la domination linguistique. Quelques oeuvres sont prémonitoires :La Meule, ou Bois flottants travaillent les pastels dans le même esprit. L’élan est donné en 1996 où le mélange des pastels avec l’essence permet de modeler des traits stables et des formes fluides répondant à la mobilité de la vie de l’imaginaire. A l’aide de pinceaux de différentes duretés et épaisseurs cette technique rend le pastel fluide : il s’établit une harmonie de réponses entre les mouvances de la pensée non-verbale et la malléabilité des pastels ainsi dilués comme dans Paysage au pin. Paysage au pin conserve des signes iconiques identifiables. Ce n’est pas encore tout à fait un paysage intérieur.'
);
    $sousPartie13->setPeriode($periode6);
    $sousPartie13->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie13' , $sousPartie13);
    $manager->persist($sousPartie13);

    $sousPartie14 = new SousPartie();
    $sousPartie14->setTitre('2- Le geste libéré');
    $sousPartie14->setDescription("Suite de 15 acryliques sur toiles dont les mouvements s'enchaînent formant une frise, mais dont chaque panneau peut vivre isolément. Il n’empêche que s’exprime ainsi  
comme l’écoulement d’un fleuve, donc l’intrusion du temps, donc une succession narrative comme les chapitres d’un livre. Libre à chacun de se raconter des histoires pourvu qu’elles ne soient pas figées dans un texte, dans un récit. Les œuvres ne sont pas des illustrations, elles prouvent au contraire la mise à distance du verbal. Les formes d’ailleurs parfois s’enchevêtrent et jouent d’ambiguïtés, de leurs métamorphoses, elles nous échappent, elles sont mouvantes, insaisissables, indéfinissables. Les formes viennent d’un geste libéré comme d’une écriture automatique, un « cadavre exquis » horizontal qui se lit de gauche à droite. L’oeuvre qui se veut libération gestuelle est encore nostalgique du récit. Les formes naissent d’un geste ample sur la toile, puis elles sont peintes et sculptées, brodées, venues de la terre ou de l’eau, du feu, de l’air, des végétaux, des minéraux, d’êtres de chair et de nerfs, de nervures, de fluides… de la danse des corps de toutes sortes confondus, enlacés ; de la confusion des espèces et des mondes. Et d’une toile à l’autre se poursuit le déroulement, la prolongation du geste et de la couleur, la précédente engendre la suivante et ainsi de suite, et dans ce chaos surgissent des objets sans nom, des objets mentaux nés de l’inconscient chargé de mémoire sensible.
"
);
    $sousPartie14->setPeriode($periode6);
    $sousPartie14->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie14' , $sousPartie14);
    $manager->persist($sousPartie14);


    $sousPartie15 = new SousPartie();
    $sousPartie15->setTitre("3- Le terreau de l'espace mental");
    $sousPartie15->setDescription('Viennent avec plus d’assurance les tableaux d’acrylique sur toile dans lesquels s’affirment les paysages intérieurs avec des formes suggestives d’étranges pays. Ce qui conforte l’idée de la nécessaire richesse du musée imaginaire : en cela, l’œuvre de culture se distingue de l’art naïf ou de l’art des fous : nous sommes dans des univers différents. Le jeu devient de plus en plus libre, les formes surgies du terreau culturel sont de plus en plus métaphoriques, où se jouent des sensibilités plurielles Masques, totems, Orient, paysages, êtres étranges… Et voilà qu’au détour de l’imaginaire surgit le masque ou la silhouette, narrateur ou chamane, certainement pas un simple découpage collé dans un décor. La figure qui surgit sans prévenir témoigne de son existence à l’égal des autres choses et des êtres sans âge, sans dimension aucune, dans un univers sans repères, sans mesure, mais non pas démesuré. Il participe à toute vie, avec la terre, l’eau, le soleil. Avant l’homo sapiens peut-être. Avant la parole. Et pourtant nourri d’interférences culturelles. Mon œuvre ne serait pas telle sans mes lectures, sans mes voyages, sans la réflexion sans cesse menée sur la création artistique, et sur la confrontation de la peinture avec la poésie. Avec la conviction que la rhétorique classique, comme la linguistique, sont des sciences du langage, mais qu’elles ne peuvent pas expliquer l’acte la création et son pouvoir libérateur. Le travail sur le dialogue entre la peinture et la poésie nous affranchit d’un support préétabli  et même des titres, des interprétations données. Je dessine et peins sans avoir de projet énonçable. La main pensante se fait plus intuitive, les formes sont l’expression de cette libération par rapport au langage. Les formes deviennent en elles-mêmes poétiques, se prêtant à l’ultime émergence de métaphores dans lesquelles la matière et en particulier le support vont jouer un rôle expressif. Cette période de création a certainement été inconsciemment influencée par une interrogation sur les écritures non-verbales ; traçages, projection des formes mouvantes qui peuplent l’imagination, comme un coup de sonde aléatoire dans l’inconnu de la pensée visuelle: une pensée sans langage! Ainsi se confirme ce que j’ai pressenti et ensuite essayé de démontrer “ l’art n’est pas un langage ”, puisque sa particularité est d’échapper aux codes, aux modes de production. Ce point de vue se démarque de la domination linguistique et libère la création par rapport au langage. S’expriment  les “ correspondances ” quand l’ordre du langage ne divise pas nos sensations : la création est un retour au monde d’avant la séparation.
Les oeuvres inventent des “signes-vifs” qui ne sont pas identifiables ou dont la reconnaissance est secondaire. Ces signes non-verbaux incitent au jeu des correspondances, qu’elles soient dans le domaine des sensations ou de la culture : nous ne devons pas séparer ces domaines qui apportent des possibilités de jouissance, d’émotion, distinguant l’homme des machines. N’est-ce pas, avec ce grand problème de la modernité, le rôle éminemment social, philosophique et humaniste de l’art? Les titres ne jouent plus qu’un rôle mnémonique, utiles pour un répertoire, en espérant que le titre ne restreindra pas  l’ouverture de l’œuvre au jeu de l’imagination sensible, et même sensorielle, comme les notes d’une partition suscitent des sensations personnelles liées à notre propre existence.  Le « lecteur » devient créateur, l’oeuvre aura de multiples vies qui n’appartiennent plus au peintre. J’ai moi-même éprouvé cette labilité en découvrant d’une année sur l’autre, des sensations et des émotions nouvelles à propos d’un même tableau. Le titre doit être écarté de la lecture contemplative. En fait, l’interprétation revient au spectateur. Pour l’artiste, la voie est ouverte pour l’éclosion de formes intuitives. : mirages, germinations, végétal, animal, danses, sables, eaux, graines, désert, larves, migrations, oiseaux, insectes. Scénographies faites des bribes de l’univers mental, ce qui flotte et monte à la surface est malaxé, recomposé et forme un monde mouvant, indescriptible. Apparaissent des acteurs, des bribes de récits qui se bousculent, des mythes à découvrir, des figures drolatiques, un bric-à-brac des brisures de  l’inconscient.
'
);
    $sousPartie15->setPeriode($periode6);
    $sousPartie15->getPeriode()->increaseSousPartie();
    $this->addReference('sous_partie15' , $sousPartie15);
    $manager->persist($sousPartie15);

        //on enregistre tout
    $manager->flush();
}
  
  /**
  * Get the order of this fixture
  * 
  * @return integer
  */
  public function getOrder()
  {
    return 2;
  }
}


?>