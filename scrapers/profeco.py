import requests
import json

r = requests.get('http://api.datos.gob.mx/v1/profeco.precios?pageSize=1&page=1')
totalProducts = r.json()['pagination']['total']

pageSize = 5000
pageNums = int(totalProducts / pageSize)

product_list = []
category_list = []
catalog_list = []
category_set = set()
catalog_set = set()
cadena_set = set()

i = 1
numFiles = 1

for page in range(1, pageNums):
	r = requests.get('http://api.datos.gob.mx/v1/profeco.precios?pageSize=%d&page=%d' %(pageSize, page))
	
	for result in r.json()['results']:
		cadena = result['cadenaComercial'].upper()
		
		if cadena.find('WAL-MART') != -1 or cadena.find('SORIANA') != -1:
			#category_list.append({'category' + str(i) : result['categoria']})
			#catalog_list.append({'catalog' + str(i) : result['catalogo']})
			#cadena = result['nombreComercial']
			cadena = result['producto']+result['marca']+result['presentacion']
			if cadena not in cadena_set:
				cadena_set.add(cadena)
				dictionary = {}
				dictionary['producto'] = result['producto']
				dictionary['presentacion'] = result['presentacion']
				dictionary['marca'] = result['marca']
				dictionary['categoria'] = result['categoria']
				#dictionary['catalogo'] = result['catalogo']
				#dictionary['precio'] = result['precio']
				#dictionary['last_update'] = result['fechaRegistro'].split()[0]
				#dictionary['nombreComercial'] = result['nombreComercial']
				#dictionary['latitud'] = result['latitud']
				#dictionary['longitud'] = result['longitud']

				product_list.append(dictionary)
				i = i + 1

				#print(i)
				if i > 1000:
					print('productoInfopart' + str(numFiles))
					f = open('productoInfopart' + str(numFiles) + '.json', 'w')
					f.write(json.dumps(product_list))
					f.close()
					product_list = []
					i = 1
					numFiles = numFiles + 1

#print(i)
print('productoInfopart' + str(numFiles))
f = open('productoInfopart' + str(numFiles) + '.json', 'w')
f.write(json.dumps(product_list))
f.close()
    
#category_set = set(category_list)
#category_list = []
#for cat in category_set:
#	category_list.append(cat)

#catalog_set = set(catalog_list)
#catalog_list = []
#for cat in catalog_set:
#	catalog_list.append(cat)

#print(json.dumps(category_list))

#print(json.dumps(catalog_list))

#print(json.dumps(product_list))
#print(i)
