<?php

declare(strict_types=1);

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'Tous les podcasts',
    'no_podcast' => 'Aucun podcast trouvé !',
    'create' => 'Créer un podcast',
    'import' => 'Importer un podcast',
    'new_episode' => 'Créer un épisode',
    'view' => 'Voir le podcast',
    'edit' => 'Modifier le podcast',
    'delete' => 'Supprimer le podcast',
    'see_episodes' => 'Voir les épisodes',
    'see_contributors' => 'Voir les contributeurs',
    'go_to_page' => 'Aller à la page',
    'latest_episodes' => 'Derniers épisodes',
    'see_all_episodes' => 'Voir tous les épisodes',
    'form' => [
        'identity_section_title' => 'Informations sur le Podcast',
        'identity_section_subtitle' =>
            'Ces champs vous permettent de vous faire remarquer.',
        'image' => 'Image de couverture',
        'title' => 'Titre',
        'handle' => 'Identifiant',
        'handle_hint' =>
            'Utilisé pour identifier le podcast. Les majuscules, les minuscules, les chiffres et le caractère souligné « _ » sont acceptés.',
        'type' => [
            'label' => 'Type',
            'hint' =>
                '- <strong>épisodique</strong> : si les épisodes sont destinés à être consommés sans ordre spécifique. Les épisodes les plus récents seront présentés en premier.<br/>- <strong>série</strong>: si les épisodes sont destinés à être consommés dans un ordre séquentiel bien défini. Les épisodes les plus anciens seront présentés en premier.',
            'episodic' => 'Épisodique',
            'serial' => 'Série',
        ],
        'description' => 'Description',
        'classification_section_title' => 'Classification',
        'classification_section_subtitle' =>
            'Ces champs auront un impact sur votre audience et votre concurrence.',
        'language' => 'Langue',
        'category' => 'Catégorie',
        'category_placeholder' => 'Sélectionner une catégorie…',
        'other_categories' => 'Autres catégories',
        'parental_advisory' => [
            'label' => 'Avertissement parental',
            'hint' => 'Contient-il un contenu explicite ?',
            'undefined' => 'non défini',
            'clean' => 'Convenable',
            'explicit' => 'Explicite',
        ],
        'author_section_title' => 'Auteur / Autrice',
        'author_section_subtitle' => 'Qui gère le podcast ?',
        'owner_name' => 'Nom du/de la propriétaire',
        'owner_name_hint' =>
            'Pour usage administratif uniquement. Visible dans le flux RSS public.',
        'owner_email' => 'E-mail du/de la propriétaire',
        'owner_email_hint' =>
            'Utilisé par la plupart des plateformes pour vérifier la propriété du podcast. Visible dans le flux RSS public.',
        'publisher' => 'Éditeur / Éditrice',
        'publisher_hint' =>
            'Le groupe responsable de la création du podcast. Fait souvent référence à la société mère ou au réseau d’un podcast. Ce champ est parfois appelé « Auteur ».',
        'copyright' => 'Droit d’auteur',
        'location_section_title' => 'Localisation',
        'location_section_subtitle' => 'De quel lieu ce podcast parle-t-il ?',
        'location_name' => 'Nom ou adresse du lieu',
        'location_name_hint' => 'Ce lieu peut être réel ou fictif',
        'monetization_section_title' => 'Monétisation',
        'monetization_section_subtitle' =>
            'Gagnez de l’argent grâce à votre audience.',
        'payment_pointer' =>
            'Adresse de paiement (Payment Pointer) pour Web Monetization',
        'payment_pointer_hint' =>
            'L’adresse où vous recevrez de l’argent grâce à Web Monetization',
        'advanced_section_title' => 'Paramètres avancés',
        'advanced_section_subtitle' =>
            'Si vous avez besoin d’une balise que nous n’avons pas couverte, définissez-la ici.',
        'custom_rss' => 'Balises RSS personnalisées pour le podcast',
        'custom_rss_hint' => 'Ceci sera injecté dans la balise ❬channel❭.',
        'partnership' => 'Partenariat',
        'partner_id' => 'ID',
        'partner_link_url' => 'URL lien',
        'partner_image_url' => 'URL image',
        'partner_id_hint' => 'Votre identifiant personnel partenaire',
        'partner_link_url_hint' => 'L’adresse générique des liens partenaire',
        'partner_image_url_hint' => 'L’adresse générique des images partenaire',
        'status_section_title' => 'Statut',
        'block' => 'Le podcast doit être masqué sur toutes les plateformes',
        'complete' => 'Le podcast n’aura plus de nouveaux épisodes.',
        'lock' => 'Empêcher la copie du podcast',
        'lock_hint' =>
            'Le but est d’indiquer aux autres plates-formes de podcast si elles sont autorisées à importer ce flux. La valeur « oui » signifie que toute tentative d’importation de ce flux dans une nouvelle plateforme doit être rejetée.',
        'submit_create' => 'Créer le podcast',
        'submit_edit' => 'Enregistrer le podcast',
    ],
    'category_options' => [
        'uncategorized' => 'non catégorisé',
        'arts' => 'Arts',
        'business' => 'Entreprise',
        'comedy' => 'Comédie',
        'education' => 'Éducation',
        'fiction' => 'Fiction',
        'government' => 'Gouvernement',
        'health_and_fitness' => 'Santé et remise en forme',
        'history' => 'Histoire',
        'kids_and_family' => 'Enfants et famille',
        'Leisure' => 'Loisirs',
        'music' => 'Musique',
        'news' => 'Actualités',
        'religion_and_spirituality' => 'Religion et spiritualité',
        'science' => 'Science',
        'society_and_culture' => 'Société et Culture',
        'sports' => 'Sports',
        'technology' => 'Technologie',
        'true_crime' => 'Documentaire criminel',
        'tv_and_film' => 'Télévision et films',
        'books' => 'Livres',
        'design' => 'Design',
        'fashion_and_beauty' => 'Mode et beauté',
        'food' => 'Nourriture',
        'performing_arts' => 'Arts du spectacle',
        'visual_arts' => 'Arts visuels',
        'careers' => 'Carrières',
        'entrepreneurship' => 'Entrepreneuriat',
        'investment' => 'Investissement',
        'management' => 'Gestion',
        'marketing' => 'Marketing',
        'non_profit' => 'À but non lucratif',
        'comedy_interviews' => 'Entretiens comiques',
        'improv' => 'Improvisation',
        'stand_up' => 'Stand up',
        'courses' => 'Cours',
        'how_to' => 'Tutoriels',
        'language_learning' => 'Apprentissage des langues',
        'self_improvement' => 'Développement personnel',
        'comedy_fiction' => 'Comédie Fiction',
        'drama' => 'Drame',
        'science_fiction' => 'Science Fiction',
        'alternative_health' => 'Santé alternative',
        'fitness' => 'Remise en forme',
        'medicine' => 'Médecine',
        'mental_health' => 'Santé mentale',
        'nutrition' => 'Nutrition',
        'sexuality' => 'Sexualité',
        'education_for_kids' => 'Éducation pour les enfants',
        'parenting' => 'Parentalité',
        'pets_and_animals' => 'Animaux de compagnie et animaux',
        'stories_for_kids' => 'Histoires pour enfants',
        'animation_and_manga' => 'Animation et Manga',
        'Automotive' => 'Automobile',
        'aviation' => 'Aviation',
        'craft' => 'Artisanat',
        'games' => 'Jeux',
        'hobbies' => 'Loisirs',
        'home_and_garden' => 'Maison et jardin',
        'video_games' => 'Jeux vidéo',
        'music_commentary' => 'Commentaire musical',
        'music_history' => 'Histoire de la musique',
        'music_interviews' => 'Entretiens musicaux',
        'business_news' => 'Actualités économiques',
        'daily_news' => 'Actualités quotidiennes',
        'entertainment_news' => 'Actualités du divertissement',
        'news_commentary' => 'Commentaire d’actualité',
        'politique' => 'Politique',
        'sports_news' => 'Actualités sportives',
        'tech_news' => 'Actualités techniques',
        'buddhism' => 'Bouddhisme',
        'christianity' => 'Christianisme',
        'hinduism' => 'Hindouisme',
        'islam' => 'Islam',
        'judaism' => 'Judaïsme',
        'religion' => 'Religion',
        'spiritualité' => 'Spiritualité',
        'astronomy' => 'Astronomie',
        'chemistry' => 'Chimie',
        'earth_sciences' => 'Sciences de la Terre',
        'life_sciences' => 'Sciences de la vie',
        'Mathématiques' => 'Mathématiques',
        'natural_sciences' => 'Sciences naturelles',
        'nature' => 'Nature',
        'physics' => 'Physique',
        'social_sciences' => 'Sciences sociales',
        'documentary' => 'Documentaire',
        'personal_journals' => 'Journaux personnels',
        'philosophie' => 'Philosophie',
        'places_and_travel' => 'Lieux et voyages',
        'relations' => 'Relations',
        'baseball' => 'Baseball',
        'basketball' => 'Basketball',
        'cricket' => 'Cricket',
        'fantasy_sports' => 'Sports fantastiques',
        'football' => 'Football',
        'golf' => 'Golf',
        'hockey' => 'Hockey',
        'rugby' => 'Rugby',
        'running' => 'Course',
        'soccer' => 'Football',
        'swimming' => 'Natation',
        'tennis' => 'Tennis',
        'volleyball' => 'Volleyball',
        'wilderness' => 'Naturalité',
        'wrestling' => 'Lutte',
        'after_shows' => 'Après spectacle',
        'film_history' => 'Histoire du cinéma',
        'film_interviews' => 'Entretiens de films',
        'film_reviews' => 'Critiques de films',
        'tv_reviews' => 'Critiques TV',
    ],
    'by' => 'Par {publisher}',
    'season' => 'Saison {seasonNumber}',
    'list_of_episodes_year' => 'Épisodes de {year} ({episodeCount})',
    'list_of_episodes_season' =>
        'Épisodes de la saison {seasonNumber} ({episodeCount})',
    'no_episode' => 'Aucun épisode trouvé !',
    'no_episode_hint' =>
        'Naviguez au sein des épisodes du podcast episodes grâce à la barre de navigation ci-dessus.',
    'follow' => 'Suivre',
    'followers' => '{numberOfFollowers, plural,
        one {<span class="font-semibold">#</span> abonné·e}
        other {<span class="font-semibold">#</span> abonné·e·s}
    }',
    'posts' => '{numberOfPosts, plural,
        one {<span class="font-semibold">#</span> publication}
        other {<span class="font-semibold">#</span> publications}
    }',
    'activity' => 'Activité',
    'episodes' => 'Épisodes',
    'sponsor_title' => 'Vous aimez le podcast ?',
    'sponsor' => 'Soutenez-nous',
    'funding_links' => 'Liens de financement pour {podcastTitle}',
    'find_on' => 'Trouvez {podcastTitle} sur',
    'listen_on' => 'Écoutez sur',
];
