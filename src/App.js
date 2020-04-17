import React, { Component } from 'react';
import './App.scss';
import IntroBox from './components/intro_box'


class App extends Component {
	render() {
	  return (
    <div className="App">
      <header className="App-wrapper">
        <IntroBox></IntroBox>
      </header>
    </div>
    );
	}
}

export default App;
