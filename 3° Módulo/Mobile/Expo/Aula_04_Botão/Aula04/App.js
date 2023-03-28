import React from 'react';
import {useState} from 'react';
import { View, StyleSheet, TouchableOpacity, Text } from 'react-native';
import BotaoProps from './components/BotaoProps.js';

const App = () => {
  
  return (
    <View style={estilera.caixa}>
      <BotaoProps 
        label="Oi" 
        corFundo="red"
        msg={"oi pessoal"}
      />
      <BotaoProps 
        label="oiii" 
        corFundo="yellow"
        msg={"Num sei"}
      />
    </View>
  );
};

const estilera = StyleSheet.create({
  caixa: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
});

export default App;

