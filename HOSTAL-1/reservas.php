<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Administración Hotel</TITLE>
		<?php //Metaetiquetas globales importadas
			include ('metaetiquetas-generales.php');
		?>
		<META name='revised' content='Tuesday, February 13th, 2017, 13:22 pm' /><!--Última revisión del sitio-->
	</HEAD>

	<BODY>
		<?php
			include ('titulo.php');
			include ('menu-principal.php');
			echo '<DIV id="cajaContenido"><BR/>';
			echo '<DIV id="cajaEntradas"><BR/>';
		?>

		<ARTICLE>
			<HEADER>
				<H2>Reserva Ya, Que Esperas... Hazlo</H2>
				<P>Detalles Usuarios</P>
				<TIME datetime="2017-02-14T01:20:00+01:00"><SMALL>Ultimo Ingreso 14-11-2017 a las 14:20</SMALL></TIME>
			</HEADER>

			<DIV class="agregar" onClick="location.href = 'form-reservas.php'">
				+ Nueva Reserva
			</DIV>

			<DIV class="agregar mostrarBuscar" onClick="document.getElementById('buscar').style.display = 'block';">
				Buscar Reserva
			</DIV>

			<DIV id="buscar">
				<FORM>
					<INPUT type="button" value="Buscar" onClick="document.getElementById('busqueda').style.display = 'block';"/>
					Día <INPUT type="search" />
					Mes <INPUT type="search" />
					Habitación <INPUT type="search" />
				</FORM>
			</DIV>

			<SECTION id="busqueda"><!--No se muestra hasta que se pulsa buscar-->
				<H3>Resultado de la búsqueda</H3>
				<P>Las coincidencias con la búsqueda son:</P>
				<TABLE>
					<TR>
						<TH>Nº</TH>
						<TH>Nombre</TH>
						<TH>Días</TH>
						<TH>Precio</TH>
						<TH>Fecha<BR />Llegada</TH>
						<TH>Fecha<BR />Salida</TH>
						<TH>Usuario</TH>
						<TH>Teléfono</TH>
					</TR>
				</TABLE>
			</SECTION>

			<SECTION>
				<H3>Ultimas Reservas</H3>
				<P>Habitaciones reservadas</P>
				<TABLE>
					<TR>
						<TH>Nº</TH>
						<TH>Nombre</TH>
						<TH>Días</TH>
						<TH>Precio</TH>
						<TH>Fecha<BR />Llegada</TH>
						<TH>Fecha<BR />Salida</TH>
						<TH>Usuario</TH>
						<TH>Teléfono</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>4</TD>
						<TD>Habitación Simple</TD>
						<TD>11 Días</TD>
						<TD>$678.556</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Maria</TD>
						<TD>3154542456</TD>
					</TR>
					<TR>
						<TD>5</TD>
						<TD>Habitación Doble</TD>
						<TD>2 Días</TD>
						<TD>$131.477</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Julian</TD>
						<TD>3212457892</TD>
					</TR>
					<TR>
						<TD>7</TD>
						<TD>Habitación Triple</TD>
						<TD>23 Días</TD>
						<TD>$1533.000</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Rosa</TD>
						<TD>3174856589</TD>
					</TR>
					<TR>
						<TD>2</TD>
						<TD>Habitación Cuádruple</TD>
						<TD>5 Días</TD>
						<TD>$391.999</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Luis</TD>
						<TD>3004521224</TD>
					</TR>
					<!--Fin de la parte temporal-->

					<?php

					?>
				</TABLE>
			</SECTION>

			<SECTION>
				<H3>Reservas Realizadas</H3>
				<P>Historial Reservas </P>
				<TABLE>
					<TR>
						<TH>Nº</TH>
						<TH>Nombre</TH>
						<TH>Días</TH>
						<TH>Precio</TH>
						<TH>Fecha<BR />Entrada</TH>
						<TH>Fecha<BR />Salida</TH>
						<TH>Cliente</TH>
						<TH>Teléfono</TH>
					</TR>

					<!--Temporal para diseño, esta parte se llena con la BD-->
					<TR>
						<TD>4</TD>
						<TD>Habitación Premiun</TD>
						<TD>11 Días</TD>
						<TD>$678.545</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Maicol</TD>
						<TD>3214588895</TD>
					</TR>
					<TR>
						<TD>5</TD>
						<TD>Habitación Doble Independiente</TD>
						<TD>2 Días</TD>
						<TD>$131.458</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Maria</TD>
						<TD>3212457892</TD>
					</TR>
					<TR>
						<TD>7</TD>
						<TD>Habitación Triple Baño Compartido</TD>
						<TD>23 Días</TD>
						<TD>$153.352</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Alejandro</TD>
						<TD>3184770444</TD>
					</TR>
					<TR>
						<TD>2</TD>
						<TD>Habitación Cuádruple</TD>
						<TD>5 Días</TD>
						<TD>$391.215</TD>
						<TD>04-02-2017</TD>
						<TD>11-02-2017</TD>
						<TD>Josefa</TD>
						<TD>3214565662</TD>
					</TR>
					<!--Fin de la parte temporal-->

					<?php

					?>
				</TABLE>
			</SECTION>
		</ARTICLE>

		<?php
			echo '</DIV><BR/>';
			echo '</DIV>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
