import react from "react";
import { View, Text, Image, ScrollView, TextInput } from 'react-native';

const Pokemon = () => {
  return (
    <ScrollView>
      <View>
        <Text
        style={{
          fontSize: 45,
          alignSelf: "center",
          color: "green",
        }}        
        >
          Snorlax x
          </Text>
          <Image
            source={require('./assets/snorlax.png')}
            style={{ width: 300, height: 210, alignSelf: "center"}}
          />
      </View>
      <TextInput
        style={{
          height: 40,
          borderColor: 'gray',
          borderWidth: 1,
          padding: 5,
          margin: 15,
        }}
        defaultValue="Digite aquiii!"
      />
    </ScrollView>
  );
}

export default Pokemon;
