HOST= 54.37.232.131
PORT= 22
USER= root
DIRECTORY= /var/www/html
FILE=  ligazse

eval "$(ssh-agent -s)" # Start ssh-agent cache
chmod 600 id_rsa # Allow read access to the private key
ssh-add id_rsa # Add the private key to SSH

sftp -o "StrictHostKeyChecking no" -P 22 54.37.232.131 <<END_SFTP
cd $DIRECTORY
mkdir $FILE
put -r $FILE
quit
END_SFTP
exit 0