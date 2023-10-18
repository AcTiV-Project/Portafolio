<?php require_once '../include/cabecera.php' ?>

    <main class="main">
        <div class="secciones">
            <div class="info-p">
                <h1>Titulo</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, consequuntur aperiam recusandae excepturi repellendus voluptatibus iusto dolorum accusantium sunt, quod praesentium veritatis porro optio facilis vitae, aliquid quam quis tempora.
                Fugit magni distinctio vitae laborum facere autem dicta quaerat vel minus asperiores eligendi, consequatur a accusamus cumque quos atque. Aliquid ea inventore modi eveniet placeat eos, repudiandae dignissimos corrupti officia?</p>
            </div>
 

            <div class="form-cotizar">
                <h1>Contactame</h1>

                <form class="formulario" action="" method="post">
                    <label class="" for="">Ingrese su nombre</label>
                    <input class="input " type="text" name="nombre" placeholder="NOMBRE">

                    <label for="">Correo Electronico</label>
                    <input class="input" type="email" name="correo" id="" placeholder="EMAIL">

                    <p>Desarrollo Web <input class="radio" type="radio" name="web" id=""></p>
                    <p>Desarrollo de software <input class="radio" type="radio" name="software" id=""></p>

                    <textarea class="input" name="" id="" cols="30" rows="10" placeholder="Describa su proyecto"></textarea>

                </form>
            </div>
        </div>
    </main>

<?php require_once '../include/pie-pagina.php' ?>