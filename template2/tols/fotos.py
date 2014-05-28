import os


file = open('fotos.txt', 'w')
link = '\t<li><img src="<?base_url();?>media/images/fotos/%s"></li>\n'

i = 1
for image in os.listdir(os.curdir):
    if image.split('.')[-1] != 'jpg':
        continue
        
    file.write(link %(image))
    i += 1
file.close()
