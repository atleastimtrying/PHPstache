get '/' do
  file_path = File.join(File.dirname(__FILE__), '..', 'public', "index.html") 
	content_type File.extname(file_path)
	File.read(file_path)
end

get %r{/public/(.+)} do |url|
	file_path = File.join(File.dirname(__FILE__), '..', 'public', "#{url}") 
	content_type File.extname(file_path)
	File.read(file_path)
end