from keras.preprocessing import image
import sys
import keras
import numpy as np
import warnings
warnings.filterwarnings('ignore')

filelocation=sys.argv[1]
#print(filelocation)
model=keras.models.load_model("Malaria_Cell")

qimg=image.load_img(r"{}".format(filelocation),target_size=(64,64))

qimg=image.img_to_array(qimg)

qimg=np.expand_dims(qimg,axis=0)

result=model.predict(qimg)
#print("dbfdhf")
if(result[0]==0):
    print("User may be affected from malaria.(Parasitized)")
else:
    print("User may be uninfected")
