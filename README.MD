### Run Local Development
1. change directory to `wp-themes`
2. run `git clone https://github.com/haniframadhani/icait_wp.git`
3. change directory to `icait-wp`
4. run `npm install`
5. run `npm run watch`

### Run on live wordpress
1. download zip file from release
2. open your wordpress dashboard
3. navigate to appearance > themes
4. click `add new theme` button
5. click `upload theme` button
6. upload the zip file 
7. click `install now` button
8. click `active`

### customize content
**NOTE**

to customize content in hero section and another section can be done in `edit site` in [wordpress admin bar](https://wordpress.com/support/admin-bar/).

#### navigation / menu
navigation / menu content can be change in appearance > menus. Don't change the navigation / menu in `edit site`

#### upload image {#upload-image}
to upload image you can follow this step
1. open media menu from sidebar
2. click `add new media file`
3. upload the image you want to use
4. after the image uploaded click the image
5. in the image detail on the right side scroll down to find the image url and copy it by click the `Copy URL to clipboard` button
![](https://cdn.discordapp.com/attachments/736056645355962391/1328917264635920444/image.png?ex=67887225&is=678720a5&hm=a716a1861d3836a1c2e328998d394bb3cce661425b89620cd8a6c8631c3aa2e5&)
![](https://cdn.discordapp.com/attachments/736056645355962391/1328917965982142525/image.png?ex=678872cd&is=6787214d&hm=7cc560d0ec53a212d2b9a53252d556cc6320104a93e924bf30080d16974301cf&)

#### install plugin {#install-plugin}
to install image you can follow this step
1. open plugins menu from sidebar
2. click `add new plugin`
3. search plugin you want to use
4. click `install` button on plugin you want to use
5. after installation done click `active` button to activated the plugin
![](https://cdn.discordapp.com/attachments/736056645355962391/1328936751183691776/image.png?ex=6788844b&is=678732cb&hm=7fe44de8252a69ad445e105fa22418226b6b77945bf73035636c71d94ed8e005&)
![](https://cdn.discordapp.com/attachments/736056645355962391/1328938268233961523/image.png?ex=678885b5&is=67873435&hm=cff7f9ced6087e6e2563c467bd1225aef59953849668d68f068e081e7cc9fbe2&)

#### hero section
![empty block](https://cdn.discordapp.com/attachments/736056645355962391/1328913895716556892/image.png?ex=67886f02&is=67871d82&hm=9c75c8a6efa16b6d6d3a99bced525c930f9e7253c6a0dff0aefdbd1219ef9d5f&)
hero section may look like in the picture with empty part between the html block. the text color and the background color almost have same color that make the empty part. 
![revealed block](https://cdn.discordapp.com/attachments/736056645355962391/1328915394769059851/image.png?ex=67887068&is=67871ee8&hm=74e2158b4c709873091624a2fe3fbb1beb23d20a5e4adade2113f9a588add64a&)
to edit the text you can write somewhere else and copy then paste it to part you want to edit the text.
#### about section
to edit text in about section you can edit it like usual.

to edit the image you need to upload your image in media menu then copy the image url and change the `src=""` in custom html block. to upload image see [upload image](#upload-image)
![](https://cdn.discordapp.com/attachments/736056645355962391/1328919037647781948/image.png?ex=678873cc&is=6787224c&hm=1efccfa210f63608ccfab44db1d24114ad47174edfd880f8d53be6e3c284658b&)

#### speaker section
to edit text in about section you can edit it like usual.

to edit the image you need to upload your image in media menu then copy the image url and change the `src=""` in custom html block. to upload image see [upload image](#upload-image)
![](https://cdn.discordapp.com/attachments/736056645355962391/1328921763542863944/image.png?ex=67887656&is=678724d6&hm=d96f337a338d28743e1d171587801fa6a62281dfe53c5f56db47bb347edc90f6&)

to add more speaker you can duplicate the part shown in image below sequencially
![](https://cdn.discordapp.com/attachments/736056645355962391/1328922710088351835/image.png?ex=67887738&is=678725b8&hm=bbe32cffc5413c21a6efec5e0a79ff77dd81221419054067f517ed74370056a0&)
and must duplicate between part shown in image below
![](https://cdn.discordapp.com/attachments/736056645355962391/1328923063668047882/image.png?ex=6788778c&is=6787260c&hm=85069493db034e67f68493b14e157670a2d8ff5692d267acdc1a71401b208a01&)
![](https://cdn.discordapp.com/attachments/736056645355962391/1328923518280142939/image.png?ex=678877f8&is=67872678&hm=11a8259e9308a1109d42974b8e258d78f83b065d50b32184152df25ab615a274&)

#### call for paper section
to edit text in about section you can edit it like usual. to add more list can be done by simply duplicate the list item and change the text in list item
![](https://cdn.discordapp.com/attachments/736056645355962391/1328924475856785419/image.png?ex=678878dd&is=6787275d&hm=f6f3aabcb9f93dc71f7e617e5b9625abdafdac2e936e38aec0ac3eb8c3c1b526&)

#### for author section

to edit text in about section you can edit it like usual. to edit the timeline text can edit like other text.

to add more time can be done with duplicate the list item
![](https://cdn.discordapp.com/attachments/736056645355962391/1328926904794873937/image.png?ex=67887b20&is=678729a0&hm=85bede90cd12609eab31be49c9d8b4b8404fa5e54739d83266c6289aaf8abc97&)

**note**

this code is the line connect between dot
```html
<div class="left-7.5 absolute top-0.5 h-full w-px -translate-x-1/2 translate-y-2 bg-san-juan-700"></div>
```
![](https://cdn.discordapp.com/attachments/736056645355962391/1328927448238264392/image.png?ex=67887ba1&is=67872a21&hm=82ce2568c01becaa21fd532773adee42015f1f861ff73b09ae71a82faf7ffed7&)
this code is the dot
```html
<div class="left-0 flex size-3 flex-shrink-0 flex-grow-0 flex-col rounded-full bg-san-juan-700 md:left-[30px]">
                </div>
```
![](https://cdn.discordapp.com/attachments/736056645355962391/1328928360428077086/image.png?ex=67887c7b&is=67872afb&hm=12bd35627009b9c4b6b06e24ed667b15794f632e31a11bee5a449b9e71026cbf&)

#### committee section

to edit text in about section you can edit it like usual. to add more committee member can just duplicate the paragraph. to add more committee group can be done with duplicate the part shown in the image below sequencially
![](https://cdn.discordapp.com/attachments/736056645355962391/1328933078432874546/image.png?ex=678880e0&is=67872f60&hm=09a422eefab8abb6b2229c9f29b24a0d96b268436d1d45153687ca34755f98e0&)
and must duplicate between part shown in image below
![](https://cdn.discordapp.com/attachments/736056645355962391/1328933765803806720/image.png?ex=67888184&is=67873004&hm=78566475954d8af8d9c75f620c20cd61e267d5aa4c61194546cfe90a93d90064&)
![](https://cdn.discordapp.com/attachments/736056645355962391/1328934135091298355/image.png?ex=678881dc&is=6787305c&hm=45a7dcbcc847b4a384bee0fd9aa0c976f92c18b4ada06e89fb82f93e9e7d99f6&)

#### registration section

to edit text in about section you can edit it like usual. to add table can use table plugin like [wpDataTables](https://wordpress.org/plugins/wpdatatables/). to install plugin see [install plugin](#install-plugin). to add table you need to add between the custom html as the image shown
![](https://cdn.discordapp.com/attachments/736056645355962391/1328940765648523405/image.png?ex=67888809&is=67873689&hm=35d8537af7056cab9f369b501fd0bea14ae212c038f7c252c890b7b9b4db0c37&)

#### footer section

to edit text in about section you can edit it like usual.
to change the icon you can change the `data-lucide=""` with the icon name you want to use in [lucide icon](https://lucide.dev/icons/)
![](https://cdn.discordapp.com/attachments/736056645355962391/1328947910209048657/image.png?ex=67888eb0&is=67873d30&hm=b124959b7b087726cc400590b62d681e9b1ad5a95200238e3aacd459dfff19bd&)
to edit the link label you can change the text between the `<a>` and `</a>`. to edit the link destination you can change the `href=""`. `mailto:` is use to open the email program. `tel:`is use to open the phone program
