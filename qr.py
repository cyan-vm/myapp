import qrcode
import qrcode.image.svg

img = qrcode.make('192.168.199.46:8000', image_factory=qrcode.image.svg.SvgImage)

with open('qr.svg', 'wb') as qr:
    img.save(qr)

