import React, { Component } from 'react';
import logo from '../logo-axis.svg';
import image_therapist from '../assets/images/daniela_bg.jpg';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faWhatsapp } from '@fortawesome/free-brands-svg-icons';

export default class IntroBox extends Component {
	render() {
		return (
			<section className="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
				<img src={logo} className="App-logo" alt="logo" />
				<div id="profile" className="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
					<div className="p-4 md:p-12 text-center lg:text-left">
						<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" 
						style={ {
							backgroundImage: "url('" + image_therapist + "')"
						} }></div>
						<h1 className="text-3xl font-bold pt-8 lg:pt-0">Centro Axis</h1>

						<div className="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-teal-500 opacity-25">
						</div>
						<p className="pt-8 text-sm">Totally optional short description about yourself, what you do and so on.</p>
		
						<div className="pt-12 pb-8">
							<button className="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded-full">Contáctanos</button> 
						</div>
		
						<div className="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
							<FontAwesomeIcon icon={faWhatsapp} />
						</div>
					</div>
				</div>
				<div className="w-full lg:w-2/5">
					<img src={image_therapist} className="rounded-none lg:rounded-lg shadow-2xl hidden lg:block" alt="Daniela Garcia" />
				</div>
			</section>
	)
}
}