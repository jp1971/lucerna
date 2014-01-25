#
# Cookbook Name:: app
# Recipe:: vhost
#
# Big ups to Mathias Hansen (https://github.com/MiniCodeMonkey/Vagrant-LAMP-Stack)
#

# Define app name
app_name = "#{node['app']['name']}"

# Enable vhost
web_app app_name do
  server_name node['app']['server_name']
  server_aliases node['app']['server_aliases']
  docroot node['app']['docroot']
  log_dir node['apache']['log_dir'] 
end

# Disable default vhost config
apache_site "000-default" do
  enable false
end