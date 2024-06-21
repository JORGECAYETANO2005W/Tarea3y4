<?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $altura = $_POST['altura'];
                        $edad = $_POST['edad'];
                        $juicio = $_POST['juicio'];
                        
                        // Validación de los criterios
                        $puede_subir = true;
                        $mensaje = '';
                        
                        if ($altura < 120) {
                            $puede_subir = false;
                            $mensaje .= '<p>Debe superar una altura de 120cm para subir a la Montaña Rusa.</p>';
                        }
                        
                        if ($edad <= 16) {
                            $puede_subir = false;
                            $mensaje .= '<p>Debe ser mayor de 16 años para subir a la Montaña Rusa.</p>';
                        }
                        
                        if ($juicio != 'no') {
                            $puede_subir = false;
                            $mensaje .= '<p>Debe aceptar no llevarnos a juicio por daños y perjuicios.</p>';
                        }
                        
                        if ($puede_subir) {
                            echo '<div class="valid-message">¡Usted puede entrar!</div>';
                            echo '<div class="ticket-image"><img src="https://www.shutterstock.com/image-photo/white-ticket-isolated-paper-texture-600nw-2269657111.jpg" alt="Ticket de acceso" style="max-width: 200px;"></div>';
                        } else {
                            echo '<div class="alert alert-danger mt-3" role="alert">'.$mensaje.'</div>';
                        }
                    }
                ?>