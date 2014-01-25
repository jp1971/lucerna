#
# Cookbook Name:: app
# Recipe:: packages
#
# Big ups to Mathias Hansen (https://github.com/MiniCodeMonkey/Vagrant-LAMP-Stack)
#

# Makes sure apt is up to date
include_recipe "apt"

# Install app packages
node['app']['packages'].each do |a_package|
  package a_package
end