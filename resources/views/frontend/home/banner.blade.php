<section class="banner-section" style="background-image: url({{ asset('frontend/assets/images/banner/banner-1.jpg') }});">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="content-box centred">
                        <h2>Rechercher la Villa de vos Rêves</h2>
                        <p>Réalisé par nos plus grands architectes.</p>
                    </div>
                    <div class="search-field">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">ACHETER</li>
                                    <li class="tab-btn" data-tab="#tab-2">Location</li>
                                </ul>
                            </div>
<div class="tabs-content info-group">
<div class="tab active-tab" id="tab-1">
<div class="inner-box">
<div class="top-search">
<form action="index.html" method="post" class="search-form">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12 column">
            <div class="form-group">
                <label>Rechercher une propriété</label>
                <div class="field-input">
                    <i class="fas fa-search"></i>
                    <input type="search" name="search-field" placeholder="Recherche par propriété, emplacement ou point d'intérêt..." required="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Location</label>
                <div class="select-box">
                    <i class="far fa-compass"></i>
                    <select class="wide">
                       <option data-display="Emplacement d'entrée">Emplacement d'entrée</option>
                       <option value="1">Paris</option>
                       <option value="2">Californie</option>
                       <option value="3">Hawai</option>
                       <option value="4">Tanger</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Type de propriété</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Tous les types">Tous les types</option>
                       <option value="1">Luxieuse</option>
                       <option value="2">Classique</option>
                       <option value="3">Moderne</option>
                       <option value="4">Futuriste</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="search-btn">
        <button type="submit"><i class="fas fa-search"></i>Rechercher</button>
    </div>
</form>
</div>
<div class="switch_btn_one ">
<button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Recherche avancé<i class="fas fa-angle-down"></i></button>
<div class="advanced-search">
    <div class="close-btn">
        <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
    </div>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Distance de l'emplacement</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Distance de l'emplacement">Distance de l'emplacement</option>
                       <option value="1">Centre commerciaux </option>
                       <option value="2">Dans un rayon de 1 km</option>
                       <option value="3">Dans un rayon de 5 km</option>
                       <option value="4">Dans un rayon de 15 km</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Chambres</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Max Chambres">Max de Chambres</option>
                       <option value="1">Une chambre</option>
                       <option value="2">Deux chambres</option>
                       <option value="3">Trois chambres</option>
                       <option value="4">quatre chambres</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Trier par</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Le plus populaire">Le plus populaire</option>
                       <option value="1">Meilleure note</option>
                       <option value="2">Nouvelles salles</option>
                       <option value="3">Chambres classiques</option>
                       <option value="4">Chambres de luxe</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
            <label>Étage</label>
                <div class="select-box">
                    <select class="wide">
                    <option data-display="Sélectionner l'étage">Sélectionner l'étage</option>
                       <option value="1">Un étage</option>
                       <option value="2">Deux étages</option>
                       <option value="3">Trois étages</option>
                       <option value="4">Quatre étages</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
            <label>Bain</label>
                <div class="select-box">
                    <select class="wide">
                    <option data-display="Max Bain">Max de Salle de Bain</option>
                       <option value="1">Salle de Bain maximum</option>
                       <option value="2">Salle de Bain maximum</option>
                       <option value="3">Salle de Bain maximum</option>
                       <option value="4">Salle de Bain maximum</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
            <label>Agences</label>
                <div class="select-box">
                    <select class="wide">
                    <option data-display="Toute agence">Toute agence</option>
                       <option value="1">Toute agence</option>
                       <option value="2">Agence 01</option>
                       <option value="3">Agence 02</option>
                       <option value="4">Agence 03</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="range-box">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="price-range">
                <h6>Sélectionner une fourchette de prix</h6>
                    <div class="range-input">
                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                    </div>
                    <div class="price-range-slider"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="area-range">
                <h6>Sélectionner une zone</h6>
                    <div class="range-input">
                        <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                    </div>
                    <div class="area-range-slider"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="tab" id="tab-2">
<div class="inner-box">
<div class="top-search">
<form action="index.html" method="post" class="search-form">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12 column">
            <div class="form-group">
            <label>Rechercher une propriété</label>
                <div class="field-input">
                    <i class="fas fa-search"></i>
                    <input type="search" name="search-field" placeholder="Recherche par propriété, emplacement ou point d'intérêt..." required="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Location</label>
                <div class="select-box">
                    <i class="far fa-compass"></i>
                    <select class="wide">
                       <option data-display="Emplacement d'entrée">Emplacement d'entrée</option>
                       <option value="1">Paris</option>
                       <option value="2">Californie</option>
                       <option value="3">Hawai</option>
                       <option value="4">Tanger</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
            <label>Type de propriété</label>
                <div class="select-box">
                    <select class="wide">
                    <option data-display="Tous les types">Tous les types</option>
                       <option value="1">Luxieuse</option>
                       <option value="2">Classique</option>
                       <option value="3">Moderne</option>
                       <option value="4">Futuriste</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="search-btn">
        <button type="submit"><i class="fas fa-search"></i>Recherche</button>
    </div>
</form>
</div>
<div class="switch_btn_one ">
<button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Recherche Avancée<i class="fas fa-angle-down"></i></button>
<div class="advanced-search">
    <div class="close-btn">
        <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
    </div>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Distance de l'emplacement</label>
                <div class="select-box">
                    <select class="wide">
                    <option data-display="Distance from Location">Distance de l'emplacement</option>
                       <option value="1">Bain maximum</option>
                       <option value="2">Dans un rayon de 1 km</option>
                       <option value="3">Dans un rayon de 5 km</option>
                       <option value="4">Dans un rayon de 15 km</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
            <label>Chambres</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Max Chambre">Max Chambre</option>
                       <option value="1">Une chambre</option>
                       <option value="2">Deux chambres</option>
                       <option value="3">Trois chambres</option>
                       <option value="4">quatre chambres</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Trier par</label>
                <div class="select-box">
                    <select class="wide">
                    <option data-display="Le plus populaire">Le plus populaire</option>
                       <option value="1">Meilleure note</option>
                       <option value="2">Nouvelles salles</option>
                       <option value="3">Chambres classiques</option>
                       <option value="4">Chambres de luxe</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>l'étage</label>
                <div class="select-box">
                    <select class="wide">
                       <option data-display="Select Floor">Sélectionnez l'étage</option>
                       <option value="1">Un étage</option>
                       <option value="2">Deux étages</option>
                       <option value="3">Trois étages</option>
                       <option value="4">Quatre étages</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
            <label>Bain</label>
                <div class="select-box">
                    <select class="wide">
                    <option data-display="Max Bain">Max Salle de Bain</option>
                       <option value="1">Salle de Bain maximum</option>
                       <option value="2">Salle de Bain maximum</option>
                       <option value="3">Salle de Bain maximum</option>
                       <option value="4">Salle de Bain maximum</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 column">
            <div class="form-group">
                <label>Agences</label>
                <div class="select-box">
                    <select class="wide">
                    <option data-display="Toute agence">Toutes agences</option>
                       <option value="1">Toutes agences</option>
                       <option value="2">Agence 01</option>
                       <option value="3">Agence 02</option>
                       <option value="4">Agence 03</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="range-box">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="échelle des prix">
                    <h6>Sélectionnez une fourchette de prix</h6>
                    <div class="entrée de plage">
                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                    </div>
                    <div class="curseur de fourchette de prix"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="zone-plage">
                    <h6>Sélectionnez une zone</h6>
                    <div class="range-input">
                        <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                    </div>
                    <div class="curseur de plage de zone"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>