<div class="wrapper">

	<?php if ( ! $this->facebook->logged_in()) :
		/* Colocar o formulário de login aqui */
		/*echo form_open('web_login',array('class' => 'login_form'));
		echo form_label('Usuario ','username');
		echo form_input('username', 'Jair Bolsonaro')."</br>";
		echo form_label('Senha ','passwd');
		echo form_password('passwd')."</br>";
		echo form_submit('login_submit','Entrar');
		echo form_close();*/
		?>

		<div class="login">
			<p>Para aproveitar nosso site:</p>
			<a href="<?php echo $this->facebook->login_url(); ?>"
			   class="btn btn-block btn-social btn-facebook" >
				<span class="fa fa-facebook-f">Entre com Facebook</span>
			</a>
		</div>

	<?php else : ?>

		<div class="user-info">
			<p><strong>User information</strong></p>
			<ul>
				<?php foreach ($user as $key => $value) :
					if($key != "location") echo "<li>".$key." : ".$value; ?></li>
				<?php endforeach; ?>
			</ul>
			<p>
				<a href="<?php echo $this->facebook->logout_url(); ?>">Logout</a>
			</p>
		</div>
	<?php endif; ?>
</div>
