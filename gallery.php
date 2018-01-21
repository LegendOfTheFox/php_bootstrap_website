<?php
    ob_start();
    //set the page title
    $page_title = null;
    $page_title = 'Gallery';
    require_once('header.php');
?>
    <main role="main">
        <div class="container">

            <section class="jumbotron text-center">

                <h1 class="jumbotron-heading">3D Portfolio</h1>
                <p class="lead text-muted">Welcome to my collection of work created with Maya, 3DSmax, and Zbrush.</p>

            </section>


            <div class="album text-muted">
                <div class="container">

                    <div class="row">
                        <div class="card" style="width: 20rem;">
                            <a href="#turret" role="button" data-toggle="modal"><img class="card-img-top" src="img/turret01.jpg" alt="Card image cap" ></a>
                            <div class="card-body">
                                <h4 class="card-title">Turret</h4>
                            </div>
                        </div>


                        <!-- Turret Modal -->
                        <div class="modal fade" id="turret" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Gun Ship</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/turret01.jpg" class=" .ml-auto" width="760">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem;">
                            <a href="#sniper_rifle" role="button" data-toggle="modal"><img class="card-img-top" src="img/sniper_card_01.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title">Sniper Rifle</h4>
                            </div>
                        </div>

                        <!-- Sniper Rifle Modal -->
                        <div class="modal fade" id="sniper_rifle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Sniper Rifle</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/sniper01.jpg" class=" .ml-auto" width="760">
                                        <img src="img/sniper02.jpg" class=" .ml-auto" width="760">
                                        <img src="img/sniper03.jpg" class=" .ml-auto" width="760">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem;">
                            <a href="#tank" role="button" data-toggle="modal"><img class="card-img-top" src="img/tank_card_01.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title">Panzer IV</h4>
                            </div>
                        </div>

                        <!-- Tank Modal -->
                        <div class="modal fade" id="tank" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Panzer IV</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/tank01.jpg" class=" .ml-auto" width="760">
                                        <img src="img/tank02.jpg" class=" .ml-auto" width="760">
                                        <img src="img/tank03.jpg" class=" .ml-auto" width="760">
                                        <img src="img/tank04.jpg" class=" .ml-auto" width="760">
                                        <img src="img/tank05.jpg" class=" .ml-auto" width="760">
                                        <img src="img/tank06.jpg" class=" .ml-auto" width="760">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem;">
                            <a href="#dropship" role="button" data-toggle="modal"><img class="card-img-top" src="img/dropship_card_01.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title">Drop Ship</h4>
                            </div>
                        </div>

                        <!-- Drop Ship Modal -->
                        <div class="modal fade" id="dropship" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Drop Ship</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/dropship01.jpg" class=" .ml-auto" width="760">
                                        <img src="img/dropship02.jpg" class=" .ml-auto" width="760">
                                        <img src="img/dropship03.jpg" class=" .ml-auto" width="760">
                                        <img src="img/dropship04.jpg" class=" .ml-auto" width="760">
                                        <img src="img/dropship05.jpg" class=" .ml-auto" width="760">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem;">
                            <a href="#grenade" role="button" data-toggle="modal"><img class="card-img-top" src="img/grenade_01.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title">Grenades</h4>
                            </div>
                        </div>

                        <!-- Grenade Modal -->
                        <div class="modal fade" id="grenade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Grenades</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/grenade_01.jpg" class=" .ml-auto" width="760">
                                        <img src="img/grenade_02.jpg" class=" .ml-auto" width="760">
                                        <img src="img/grenade_03.jpg" class=" .ml-auto" width="760">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem;">
                            <a href="#pirate" role="button" data-toggle="modal"><img class="card-img-top" src="img/pirate_01.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title">Pirate Ship</h4>
                            </div>
                        </div>

                        <!-- Pirate Scene Modal -->
                        <div class="modal fade" id="pirate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pirate Ship</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/pirate_01.jpg" class=" .ml-auto" width="760">
                                        <img src="img/pirate_02.jpg" class=" .ml-auto" width="760">
                                        <img src="img/pirate_03.jpg" class=" .ml-auto" width="760">
                                        <img src="img/pirate_04.jpg" class=" .ml-auto" width="760">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem;">
                            <a href="#revolver" role="button" data-toggle="modal"><img class="card-img-top" src="img/revolver_card_01.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title">Revolver</h4>
                            </div>
                        </div>

                        <!-- Revolver Modal -->
                        <div class="modal fade" id="revolver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Revolver</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/revolver_01.jpg" class=" .ml-auto" width="760">
                                        <img src="img/Revolver_01.png" class=" .ml-auto" width="760">
                                        <img src="img/Revolver_02.png" class=" .ml-auto" width="760">
                                        <img src="img/Revolver_03.png" class=" .ml-auto" width="760">
                                        <img src="img/Revolver_04.png" class=" .ml-auto" width="760">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem;">
                            <a href="#arduino" role="button" data-toggle="modal"><img class="card-img-top" src="img/arduino_card_01.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title">Arduino Concept</h4>
                            </div>
                        </div>

                        <!-- Arduino Modal -->
                        <div class="modal fade" id="arduino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Arduino</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/arduino01.jpg" class=" .ml-auto" width="760">
                                        <img src="img/arduino02.jpg" class=" .ml-auto" width="760">
                                        <img src="img/arduino03.jpg" class=" .ml-auto" width="760">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem;">
                            <a href="#spacestation" role="button" data-toggle="modal"><img class="card-img-top" src="img/spacestation_card_01.png" alt="Card image cap"></a>
                            <div class="card-body">
                                <h4 class="card-title">Space Station</h4>
                            </div>
                        </div>

                        <!-- Space Station Modal -->
                        <div class="modal fade" id="spacestation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Space Station</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/spacestation02.png" class=" .ml-auto" width="760">
                                        <img src="img/spacestation03.png" class=" .ml-auto" width="760">
                                        <img src="img/spacestation04.png" class=" .ml-auto" width="760">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <?php
    require_once('footer.php');
?>
